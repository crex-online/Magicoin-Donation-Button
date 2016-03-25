Magicoin Donation Button
==============

*The Coin Magi Donation Button* - edited by cryptoCoder

The original project was created by http://scotty.cc/, visit http://coinwidget.com/ for full documentation, demo, and a link code wizard.

Released under the Open Source **MIT License** (see **LICENSE** file for details).

Please help keep this project alive! Tell someone about this widget! 

Donations are welcome and will go towards further development of this project as well as other crypto related projects. Use the wallet addresses below to donate. 

	XMG: 9SxtEFZwPoV54AR6KLvNtBcDyVgUoV6zWH

*Thank you for your support and generosity!*


Installation
==============
A. Grab the latest version from GitHub: https://github.com/cryptoCoder/Magicoin-Donation-Button

B. Copy the files on the root of your website:

C. Include *js* and *css* in the head of the page.

	<link rel="stylesheet" href="./res/magiButtonDonation.css">
	<script type="text/javascript" src="./res/magiButtonDonation.js"></script>
	
D. Paste this code where you want to see the button

	<script>
		CoinWidgetCom.go({

			/* make sure you update the wallet_address or you will not get your donations */
			wallet_address: "9SxtEFZwPoV54AR6KLvNtBcDyVgUoV6zWH"

			, alignment: "bl"
			, qrcode: true
			, auto_show: false
			, lbl_button: "Donate Coin Magi"
			, lbl_address: "Donate Coin Magi to this Address:"
		});
	</script>
	
E. __Customize!__

| Option      | Default Value         | Acceptable Values | Description                                                                                                                                 |
|-------------|-----------------------|-------------------|---------------------------------------------------------------------------------------------------------------------------------------------|
| qrcode      | true                  | true - false      | Set to true if you want to show the QR code generator that appears at the bottom left of the window. Set to false to hide the QR code icon. |
| auto_show   | false                 | true - false      | Set to true if you want the window to auto appear as soon as the counter finishes loading.                                                  |
| lbl_button  | Donate Coin Magi      | (anything)        | Change the text of the label on the main button.                                                                                            |
| lbl_address | My Coin Magi Address: | (anything)        | The text that appears above your wallet address within the window.                                                                          |
| onShow      | null                  | function          | Execute a function when the window opens.                                                                                                   |
| onHide      | null                  | function          | Execute a function when the window closes.                                                                                                  |

Example Code
==============

See the file: **code-sample.html**

The complete list of the options and acceptable values can be found in the table above.

*Enjoy! - cryptoCoder*

