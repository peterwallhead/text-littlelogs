A simple Twilio endpoint to that lets http://littlelogs.co users text their logs to the service.

## Dependencies
- A web server with php installed and configured to use the mail() function 
- A littlelogs account (get one [here](http://littlelogs.co/signup/))
- Your secret littlelogs email address (found [here](http://littlelogs.co/account/))
- A [Twilio](https://www.twilio.com) phone number that's capable of sending and receiving texts

## Setup
- Once you have all of the above, then fill in the blanks in index.php and upload it to your server
- Configure your Twilio number to use the url to this file as your Request URL

## Using this script
Simply text your Twilio number like this: 
```
{littlelog} My message to be posted on littlelogs
```
