## Day03 - Network and System Administration with PHP

For this day's exercises I had to install [__bitnami MAMP__](https://bitnami.com/stack/mamp). The documentation can be found [here](https://docs.bitnami.com/installer/infrastructure/mamp/get-started/get-started/). We only install phpMyAdmin.

Bitnami MAMP provides a complete PHP, MySQL and Apache development environment.

- __POST and GET [Superglobals](https://www.youtube.com/watch?v=pkxqlfLioCk&t=188s).__

## Cookies 🍪

[Video](https://youtu.be/jort8_4U-88?list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-) on cookies and sessions. Cookies for the user and Sessions for the server. Cookies shouldn't hold any very sensitive data - that is for session. 

Cookies have time limits, but they are not forgotten by an ended session.

To create cookies we use the __setcookie()__ function in PHP. Cookies have a name, a value, an expiration date. Expiration day is set in milliseconds, any negative value will destroy a cookie (used when deleting a cookie).

## curl for cookies

[curl](https://www.mit.edu/afs.new/sipb/user/ssen/src/curl-7.11.1/docs/curl.html) is a tool to transfer data from or to a server using one of the supported protocols.

Curl flags:
- `-b`: __cookie__, pass the data to the http server as a cookie.
- `-c`: __cookie-jar__, to specify wo which file you want your curl to write all cookies

## HTTP Authentication with PHP

- [man http-auth](https://www.php.net/manual/en/features.http-auth.php)

What is the __header()__ function? The [header](https://www.php.net/manual/en/function.header.php) function sends a raw [HTTP header](http://www.faqs.org/rfcs/rfc2616.html). The function must be called before any actual output is sent.
