# WebAuthn TYPO3 Extension

This TYPO3 extension allows backend users login using the [WebAuthn standard](https://webauthn.io)

## Installation

This extension only works when installed in composer mode. If you are not familiar using composer together with TYPO3
yet, you can find a [how to on the TYPO3 website](https://composer.typo3.org/).

You can Install the extension with the following command:

```
composer require cvc/typo3-webauthn
```
The Extension doesn not require any further configuration. After it is activated, a second login provider can be used to login using a security key.

## Usage

### Register credentials

In the backend module "Security keys" new security keys can be registered. Press on register security key.
If you want, you can enter a description for the credential you are about to register.

### Login

To Login with your previously registered security key, you have to select "Login with WebAuthn" on the login screen. Enter your username, press enter, and follow the instructions on the screen to proceed.
