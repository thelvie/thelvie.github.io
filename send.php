<?php
	if (isset($_POST['kirim'])) {
	$nama 		= $_POST['nama'];
	$email 		= $_POST['email'];
	$nohp 		= $_POST['nohp'];
	$pesan 		= $_POST['pesan'];
	header("location:https://api.whatsapp.com/send?phone=$nohp&text=%D8%A8%D9%90%D8%B3%D9%92%D9%85%D9%90%20%D8%A7%D9%84%D9%84%D9%91%D9%87%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%92%D9%85%D9%8E%D9%86%D9%90%20%D8%A7%D9%84%D8%B1%D9%8E%D9%91%D8%AD%D9%90%D9%8A%D9%92%D9%85%D9%90%0A%20_Assalamu%E2%80%99alaikum%20Warrahmatullah%20Wabarrakatuh_%20%0A%0ANama:%20$nama%20%0DEmail:%20$email%20%0DPesan:%20$pesan%0A%20%0AJazakumullah%20Khairan%20Katsiran%20%0A%20%0A%20_Wassalaamu%E2%80%99alaikum%20warrahmatullaah%20wabarakaatuh_");
	} else {
		echo "
		<script>
			window.location=history.go(-1);
		</script>
		"; 
	}
?>
