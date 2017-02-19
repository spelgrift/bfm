<!--JS-->
<script src="<? echo URL; ?>public/js/public.min.js"></script>
<?php
if (isset($this->js)){
	foreach($this->js as $js){
		echo '<script src="'.URL.'public/js/'.$js.'"></script>';
	}
}
?>
</body>
</html>