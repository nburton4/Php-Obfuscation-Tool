<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>PhP Code Obfuscator By An0n 3xPloiTeR</title>
		<meta name="about" content="For Obfuscating Php Code Given" />
        <meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
        <meta name="description" content="For Obfuscating the Php Code given" />
        <meta name="keywords" content="Obfuscator, index.php, Tool" />
        <meta http-equiv="refresh" content=""><!-- For Refreshing The Page After ____ intervals of time -->
		<meta name="revisit-after" content="1 days" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<script>
			function _alert() {
				alert("Php Obfuscator By An0n 3xPloiTeR");
				alert("Although There Are No Rights But You Aren't Supposed To Copy HTML too! :P");
				return false;
			} document.oncontextmenu = _alert;
		</script>
		<style>
			body {
				background-color: #080510;
			}
            a {
                color: red;
                text-decoration: none;
            }
            a:hover {
                color: teal;
            }
            .heading {
                text-align: center;
                font: 300% impact;
                margin-top: 1vh;
            }
			.subheading {
				margin-top: 1vh;
				color: lawngreen;
				font-family: Comic Sans Ms;
				font: 170% impact;
				text-align: center;
				text-transform: capitalize;
			}
			.input {
				margin-top: 10vh;
				text-align: center;
			}
            .footer {
                text-align: center;
                font: 25px impact;
                color: white;
                position: fixed;
                bottom: 0vh;
                left: 0vh;
                right: 0vh;
            }
			textarea {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
			input {
				color: white;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510; 
			}
			select {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510;
			}
			option {
				color: white;
				font-size: 100%;
				font-weight: bold;
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: #080510;
			}
		</style>
	</head>

	<body>
        <div class="heading">
            <font>
                <span style="color: white;">Php Obfuscator By</span> 
                <span style="color: red;">An0n 3xPloiTeR</span>
            </font>
        </div>
		<div class="subheading">
			<font>It Obfuscates The Given Php Code</font>
		</div>
		<div class="input">
			<form action="" method="POST">
				<textarea rows="9" cols="85" type="text" name="php" placeholder="Input Php Code Here"></textarea><br><br>
				<select name="option">
					<option>Weak Obfuscation</option>
					<option>Medium Level Obfuscation</option>
					<option>Strong Obfuscation</option>
					<option>High Level Obfuscation</option>
				</select><br><br><br>
				<input type="submit" name="submit" value="Submit" /><br>
				<?php
					if (isset($_POST['submit'])) {
					$phpcode = $_POST['php'];
						if (!empty($phpcode)) {
							$option = htmlspecialchars($_POST['option']);
							$website = "http://".$_SERVER['HTTP_HOST'];
							$file_location = $_SERVER['REQUEST_URI'];
							$all_in_one = $website.$file_location;
							$uuencode = base64_encode(convert_uuencode($phpcode));
							$obfuscate_low_level = strrev(base64_encode(gzdeflate(gzcompress($phpcode))));
							$obfuscate_medium_level = strrev(base64_encode(gzdeflate(gzdeflate(gzcompress($phpcode)))));
							$obfuscate_high_level = strrev(base64_encode(gzdeflate(gzdeflate(gzdeflate(gzcompress(gzcompress($phpcode)))))));
							$high_level = strrev(base64_encode(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(gzcompress(gzdeflate(str_rot13($phpcode)))))))))));
							$high_level_1 = str_replace('a', '\x61', $high_level);
							$high_level_2 = str_replace('A', '\x41', $high_level_1);
							$high_level_3 = str_replace('b', '\x62', $high_level_2);
							$high_level_4 = str_replace('B', '\x42', $high_level_3);
							$high_level_5 = str_replace('c', '\x63', $high_level_4);
							$high_level_6 = str_replace('C', '\x43', $high_level_5);
							$high_level_7 = str_replace('=', '\x3d', $high_level_6);
							$high_level_8 = str_replace('+', '\x2b', $high_level_7);
							switch ($option) {	
								case 'Weak Obfuscation':
									echo '
<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									    #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLEnVSEosTjUziU9JT\x635PSdUoLikqSi3TUHHMM8iLN64IyMnPDEkN0gQ\x42\x61w\x41\x3d";
$An0n_3xPloiTeR = "'.$obfuscate_low_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($UeXploiT))));
exit;
?></textarea><br><br>
';
								break;

								case 'Medium Level Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									    #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "Sy1LzNFQt1dLL7FW10uvKs1Lzs8tKEotLtZIr8rMS8tJLElFYiUlFqe\x61m\x63Snp\x43\x62np6RqFJ\x63UF\x61WW\x61\x61g45hnkxRtX\x42OTkZ4\x61k\x42mm\x43gTU\x41";
$An0n_3xPloiTeR = "'.$obfuscate_medium_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($UeXploiT))));
exit;
?></textarea><br><br>
';

								break;

								case 'Strong Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									    #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "Sy1LzNFQKyzNL7G2V0svsYYw9dKrSvOS83MLilKLizXQOJl5\x61TmJJ\x61lYWUmJx\x61lmJvEpq\x63n5K\x61k\x61xSVFR\x61llGiqOeQZ58\x63YV\x41Tn5mSGpQZpQY\x410\x41";
$An0n_3xPloiTeR = "'.$obfuscate_high_level.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($UeXploiT))));
exit;
?></textarea><br><br>
';
								break;

								case 'High Level Obfuscation':
									echo '<textarea rows="9" cols="85">
<?php
/*
		The Given Code Was Successfully Obfuscated By An0n 3xPloiTeR\'s Obfuscator :-)
						From : '.$all_in_one.'
									Thanks For Using :D
							Dont Forget To Like And Share <3
		Dont Change The Variables Names And If You Change Obfuscated Code Wont Work Properly :-)
							Changing Author\'s Name Wont Make You The Author :) ^_^
									    #RespectCoders 
								!!! ~ By An0n 3xPloiTeR ~ !!!
*/
$UeXploiT = "Sy1LzNFQKyzNL7G2V0svsYYw9YpLiuKL8ksMjTXSqzLz0nISS1K\x42rNK85Pz\x63gqLU4mLq\x43\x43\x63lFqe\x61m\x63Snp\x43\x62np6Rq\x41O0sSi3TUHHMM8iLN64IyMnPDEkN0kQ\x431g\x41\x3d";
$An0n_3xPloiTeR = "'.$high_level_8.'";
eval(htmlspecialchars_decode(gzinflate(base64_decode($UeXploiT))));
exit;
?></textarea><br><br>
';
								break;
							} 
						}
					}
				?>
			</form>
		</div>
        <div class="footer">
            <font>
            Developed By 
                <span style="color: red;">
                    <a href="https://www.google.com/search?q=An0n 3xPloiTeR" target="_blank">An0n 3xPloiTeR</a>
                </span>
            </font>
        </div>
	</body>
</html>
