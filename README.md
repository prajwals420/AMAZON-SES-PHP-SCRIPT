# AMAZON-SES-SMTP-PHP-SCRIPT
SEND EMAILS THROUGH AMAZON SES SMTP

STEP 1 : Download the script file index.php.

STEP 2 : Download the AWS PHP SDK (You can refer this documentation : https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_installation.html )

Once you have downloaded the Script file and the SDK move that files to the server where you are hosting the project in my case I am locally hosting and using XAMPP.

![ses](https://user-images.githubusercontent.com/87749822/155887127-cfb4f129-7f96-4143-96b6-2643794b7731.png)


STEP 3 : In the script file you have to add the credentials (Remember don't share the credentials with any one.")

![image](https://user-images.githubusercontent.com/87749822/155890058-7338fade-0405-4186-bae6-3d4d31c7be1e.png)

Fields you have to edit are:

Line No. 29. You have to mention the Host as per the AWS Zone which you are using.

SMTP Region list. 

![image](https://user-images.githubusercontent.com/87749822/155890152-c9467a69-74e9-4e76-8590-6ba17f49a440.png)


Line No. 42 and 45 where you have  to enter the credentials. That is username and password. In my case i have randomly added XYZXYZ.

Now how to obtain this username and password...?

Please refer the documentation given below 

https://docs.aws.amazon.com/ses/latest/dg/smtp-credentials.html

From the Documentation you have to follow this particular part

![image](https://user-images.githubusercontent.com/87749822/155887818-b3c18150-3b57-4f07-a815-2b0647a11a8d.png)

STEP 4 : Generating Credentials. That is username and password. (Remember don't share the credentials with any one.")

4.1 : Head on to "https://console.aws.amazon.com/ses/"

![image](https://user-images.githubusercontent.com/87749822/155887983-1e86cb14-43d3-42b6-bd21-aa5fe592d30b.png)

4.2 : Scroll down a bit and in Simple Mail Transfer Protocol (SMTP) settings container, choose Create SMTP Credentials.

![image](https://user-images.githubusercontent.com/87749822/155888143-136822b7-1dcd-41c0-a058-bb0dfbff59d4.png)

4.3 : Create User for SMTP, you can use the default value that is provided in this field. When you finish, choose Create in the bottom-right corner.

![image](https://user-images.githubusercontent.com/87749822/155888237-7ab995d5-fd22-4ba7-b47b-ba1e27fc50ef.png)

4.4 : Expand Show User SMTP Security Credentials - your SMTP credentials are shown on the screen.

Download these credentials by choosing Download Credentials or copy them and store them in a safe place, because you can't view or save your credentials after you close this dialog box.

![image](https://user-images.githubusercontent.com/87749822/155888521-4c6e9544-caec-4b1f-aa9d-5269b4c712fe.png)

Once you have these credentials Add then in your script Follow Step 3.

STEP 5 : Now when you will run the script in localhost XAMPP. It will give an error that.

"Email Address not verified". So sender and recipient email address must be verified.

![image](https://user-images.githubusercontent.com/87749822/155889087-be3c6a2e-868f-4192-8cf7-b0cc446207c4.png)

5.1 : The email address that we are adding in line 48 and 51 that is for sender and recipient must be verified 

![image](https://user-images.githubusercontent.com/87749822/155889218-48fc4247-a91f-4820-ac32-b54a74ae1d9e.png)

5.2 : How to verify the Email Address.
Head on to "https://console.aws.amazon.com/ses/"

5.3 : Click on Verified Identities option in the left corner.

![image](https://user-images.githubusercontent.com/87749822/155889399-e49ca7e6-ae50-4ecc-8242-6bff4f10bd90.png)

5.4 : Click on Create Identity. Select Email Address option. After that enter Email Address and Click on Create Identity in bottom Right Corner.

![image](https://user-images.githubusercontent.com/87749822/155889506-64e96f9c-a4da-4480-9091-e1414df02f2e.png)

5.5 : After that you will receive a confirmation mail on the email accept that and then you are good to go.

STEP 6 : Now when you will run the script. The Email will be Triggered Successfully.

![image](https://user-images.githubusercontent.com/87749822/155889842-d5093840-458d-4c2b-b561-d73fb5e72385.png)

![image](https://user-images.githubusercontent.com/87749822/155889883-f325ed2e-5c67-44e4-93d3-cd95314cf1aa.png)

![image](https://user-images.githubusercontent.com/87749822/155889935-840962dc-0582-4b2c-b644-4e0b7b4d4aca.png)


Thank You.
