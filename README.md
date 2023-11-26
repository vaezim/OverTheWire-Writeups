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
11) 