<?php

namespace App\Http\Controllers;

use DB;
use App\Domains\Auth\Models\User;
use Illuminate\Http\Request;
use Elliptic\EC;
use kornrunner\Keccak;
use web3;
class Web3AuthController extends Controller
{
    
    public function authenticate(Request $request)
    {
        Web3::verifySignature(
            $this->getSignatureMessage(session()->get('metamask-nonce')),
            $request->signature,
            $request->address,
        );

        $user = User::query()->where('eth_address', $request->address)->firstOrFail();

        auth()->login($user);

        session()->forget('metamask-nonce');

        return true;
    }

    public function signature(Request $request)
    {
        $code = \Str::random(8);

        session()->put('metamask-nonce', $code);

        return $this->getSignatureMessage($code);
    }

    private function getSignatureMessage($code)
    {
        return __("I have read and accept the terms and conditions.\nPlease sign me in.\n\nSecurity code (you can ignore this): :nonce", [
            'nonce' => $code
        ]);
    }
    
    
    function pubKeyToAddress($pubkey) {
        return "0x" . substr(Keccak::hash(substr(hex2bin($pubkey->encode("hex")), 1), 256), 24);
    }

    public static function verifySignature($message, $signature, $address): bool
    {
        $hash = Keccak::hash(sprintf("\x19Ethereum Signed Message:\n%s%s", strlen($message), $message), 256);

        $sign = [
            "r" => substr($signature, 2, 64),
            "s" => substr($signature, 66, 64)
        ];

        $recId = ord(hex2bin(substr($signature, 130, 2))) - 27;

        if ($recId !== ($recId & 1)) {
            throw new \RuntimeException("Invalid Hex");
        }

        $publicKey = (new EC('secp256k1'))->recoverPubKey($hash, $sign, $recId);

        if ((string)Str::of($address)->after('0x')->lower() ==
            substr(Keccak::hash(substr(hex2bin($publicKey->encode('hex')), 1), 256), 24)) {

            throw new \RuntimeException("Invalid Signature Hash");
        }

        return true;
    }
}
