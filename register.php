<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="WU, WebUtilities, Web Utilities" />
<meta name="title"
	content="WebUtilities: l'insieme di semplici funzionalità fruibili mediante il Web." />
<meta name="description"
	content="WebUtilities: l'insieme di semplici funzionalità fruibili mediante il Web." />
<meta name="generator"
	content="PWEB-WU v1.0 - Esame di Programmazione per il WEB: Web Utilities" />
<meta name="author" content="Luigi de Pinto" />

<title>WebUtilities: l'insieme di semplici funzionalità fruibili
	mediante il Web.</title>

<link rel="shortcut icon" href="http://webu.altervista.org/templates/img/favicon.ico"
	type="image/x-icon" />    

<!-- CSS per Compatibilità IE 6 -->
<link rel="stylesheet" href="templates/css/main.css" type="text/css" />
<!--[if IE]>     
	<link rel="stylesheet" type="text/css" href="templates/css/iecompatibilities.css" />
<![endif]-->

<script type="text/javascript" src="libraries/js/mootools-core-1.4.2.js"></script>
<script type="text/javascript" src="libraries/js/noscript.js" ></script>

<!-- CDATA section (commentato per garantire la compatibilità su vecchi browser) 
	è richiesto se uso XHTML -->
<script type="text/javascript" charset="UTF-8">
	window.addEvent('domready', function() {
		var inpUsr = $('reg-usernm');

		inpUsr.addEvents({
			change : function() {
				this.fireEvent('aziona', 'change!');
			},
			keyup : function() {
				this.fireEvent('aziona', 'keyup!');
			},
			aziona : function(testo) {
				alert(testo);
			}
		});

	});

</script>


</head>
<body>

<div id="noscript">	<!-- MSG per browser con "user agent" Javascript disabilitato o non presente  -->
	<h3>&Egrave; necessario abilitare "Javascript" per la corretta funzionalit&agrave; del sito.</h3> 
</div>

	<div id="wrapper">
		<div id="header">
			<h1>WEB Utilities</h1>
		</div>
		
		<!-- Inizio Navbar -->		
		
		<div id="left_navbar">
			
			<!-- Inizio Login -->	<div class="linemenu">&nbsp;</div>
			<div class="signin-box">
				<h3>Accedi</h3>
				<form id="loginform" method="post" action="" >
					<div class="signin-field">
						<label>
							<strong class="usernm-label">Nome Utente</strong>
							<input type="text" id="usernm" name="usernm" class="in-usrnm"/>
						</label>
					</div>
					<div class="signin-field">
						<label>
							<strong class="passwd-label">Password</strong>
							<input type="password" id="passwd" name="passwd" class="in-pswd"/>
						</label>
					</div>
					<div class="signin-field">
						<input type="submit" value="Accedi" id="signIn" name="signIn" class="" />
						<label class="persistentCookie">
							<input type="checkbox" value="yes" id="persistentCookie" name="persistentCookie" />
							Resta connesso
						</label>
					</div>
					<div class="signin-field">
						<a href="register.php" title="Registrati">Registrati</a>
					</div>
				</form>
			</div>
			<!-- Fine Login -->			<div class="linemenu margineUD">&nbsp;</div>
			
		</div>
		<!-- Fine Navbar -->

		<!-- Inizio contenitore principale -->
		<div id="content">
			<div class="linemenu">&nbsp;</div>
			<!-- Inizio Box Alarm -->
			<div id="alarm">
				<img src="templates/img/48x48/alarm.gif" alt="Sveglia!" />
				<h2>Impegni</h2>
				<p>sveglia impostata alle ore:&nbsp;&laquo;<em>10:12 - 12/01/2011</em>&raquo;</p>
			</div>
			<div class="linemenu">&nbsp;</div>
			<!-- Fine Box Alarm -->	
			
			<div class="boxelementi">
			<div id="registr">
				<form id="register-form" method="post" action="" >
				<ul>
					<li>
						<input type="text" id="nome" name="nome" />
						<img src="templates/img/16x16/required.gif" alt="null" />
						<span class="required">*</span>
						<label>Nome</label>
					</li>
					<li>
						<input type="text" id="cognome" name="cognome" />
						<img src="templates/img/16x16/void.gif" alt="null" />
						<label>Cognome</label>
					</li>
					<li>
						<input type="text" id="email" name="email" />
						<img src="templates/img/16x16/void.gif" alt="null" />
						<span class="required">*</span>
						<label>Indirizzo Email</label>
					</li>
					<li>
						<input type="text" id="reg-usernm" name="reg-useddrnm" class="in-usrnm"/>
						<img src="templates/img/16x16/void.gif" alt="null" />
						<span class="required">*</span>
						<label>Username</label>
					</li>
					<li>
						<input type="password" id="reg-passwd1" name="reg-passwd1" class="in-pswd"/>
						<img src="templates/img/16x16/void.gif" alt="null" />
						<span class="required">*</span>
						<label>Password</label>
					</li>
					<li>
						<input type="password" id="reg-passwd2" name="reg-passwd2" class="in-pswd"/>
						<img src="templates/img/16x16/void.gif" alt="null" />
						<span class="required">*</span>
						<label>Ripeti la password</label>
					</li>
					<li>
						<input type="submit" value="Registra" id="register" name="register" class="" />
					</li>
				</ul>
			</div>
			</div>
		</div>
		<div id="footer">
			<div class="linemenu">&nbsp;</div>
			<h1>Footer</h1>
		</div>
	</div>
</body>
</html>
