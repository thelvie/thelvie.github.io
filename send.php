<?php
	if (isset($_POST['kirim'])) {
	$nama 		= $_POST['nama'];
	$email 		= $_POST['email'];
	$nohp 		= $_POST['nohp'];
	$pesan 		= $_POST['pesan'];
	header("location:https://api.whatsapp.com/send?phone=$nohp&text=%20_Assalamu%E2%80%99alaikum%20Warrahmatullah%20Wabarrakatuh_%20%0A%0ANama:%20$nama%20%0DEmail:%20$email%20%0DPesan:%20$pesan%0A%20%0AJazakumullah%20Khairan%20Katsiran%20%0A%20%0A%20_Wassalaamu%E2%80%99alaikum%20warrahmatullaah%20wabarakaatuh_");
	} else {
		echo "
		<script>
			window.location=history.go(-1);
		</script>
		"; 
	}
?>
