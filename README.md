# Natas writeup

### Levels
0) page source `[Ctrl + U]`
1) page source `[Ctrl + U]`
2) **url** + `/files`
3) **url** + `/robots.txt` & **url** + `/s3cr3t/`
4) Edit the `Referer` value

<p align="center">
  <img src="https://github.com/vaezim/OverTheWire-Writeups/blob/master/natas/media/natas5.png" />
</p>

5) Set `Cookie: Loggedin=1`

<p align="center">
  <img src="https://github.com/vaezim/OverTheWire-Writeups/blob/master/natas/media/natas6.png" />
</p>

6) **url** + `includes/secret.inc` & page source
7) **url** + `index.php?page=/etc/natas_webpass/natas8`
8) Decode the encoded secret:
https://github.com/vaezim/OverTheWire-Writeups/blob/c6f9570f6202bc18fe202eb9f16317a5565657f9/natas/code/natas8.php#L1-L10
9) Find words containing: `a /etc/natas_webpass/natas10;`
10) Find words containing: `a /etc/natas_webpass/natas11`
11) First find the XOR key used by the server side using default cookie data:

<p align="center">
  <img src="https://github.com/vaezim/OverTheWire-Writeups/blob/master/natas/media/natas11.png" />
</p>

then set `$default_data["showpassword"] = "yes"`:
https://github.com/vaezim/OverTheWire-Writeups/blob/504cad6dd664197c39c6eb1b1d3543c966fea285/natas/code/natas11.php#L1-L22

12) Upload a php file to print the output of the command `cat /etc/natas_webpass/natas13`. 
https://github.com/vaezim/OverTheWire-Writeups/blob/42949a4d90b62dd42459b38b19ea3bfbf7383178/natas/code/natas12.php#L1-L6
Then change the `filename` request parameter to a string with `.php` extension:

<p align="center">
  <img src="https://github.com/vaezim/OverTheWire-Writeups/blob/master/natas/media/natas12.png" />
</p>

13) We need to put jpeg's magic number `ff d8 ff e0` to the beginning of the file.
https://github.com/vaezim/OverTheWire-Writeups/blob/43b85356b6dd37cf4d54d27396e0dea988d5d008/natas/code/natas13.py#L1-L15
The rest is the same as level 12.

14) 
