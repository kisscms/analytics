<? if( !empty($config['analytics']['account']) ){ ?>
<script type="text/javascript" data-type="require">
	var _gaq=[["_setAccount","<?=$config['analytics']['account']?>"],["_trackPageview"]];
<? if( !empty($config['analytics']['domain_name']) ){ ?>
	_gaq.push(['_setDomainName', '<?=$config['analytics']['domain_name']?>']);
<? } ?>
	(function(d,t) {
		var id = 'google-analytics'; if (d.getElementById(id)) {return;}
		var js = d.createElement(t); js.type = 'text/javascript'; js.id = id; js.async = true;
		js.src = ("https:"==location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";
		var s = document.getElementsByTagName(t)[0]; s.parentNode.insertBefore(js, s);
	})(document,"script");
</script>
<? } ?>