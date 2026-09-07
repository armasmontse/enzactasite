<style>
	#loopedSlider ul.paginations {
		/* 4 Slides */
		/* width: 140px; */
		/* 5 Slides */
		width: 170px;
		/* 6 Slides */
		/* width: 200px; */
		/* 7 Slides */
		/* width: 225px; */
		/* 9 Slides */
		/* width: 260px; */
		background-color: #ffffffd1;
		padding-left: 10px;
	}
	ul.paginations li.active a {
		color: #299973;
		font-weight: bold;
	}
	ul.paginations li a {
		color: #525252;
	}
</style>

<?php
	// ==================== MAG ====================
	// Link dinámico de slide #5 "Catálogo"
	
	// Construimos la base (https + dominio + ruta al archivo)
	$url_base = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

	// Definimos los nuevos parámetros
	$new_parameters = "?option=com_ibo&Itemid=1002804&step_number=6821&action_number=1&menu_image=-1class_sfx=shopENZACTA_icon";

	// El link final
	$final_url = $url_base . $new_parameters;
?>

<div class="slides" style="cursor: initial;">
	
	<!-- 1 --->
	<div>
		<a href="https://wwwmx.enzacta.com/mx/producto/magnesio/" target="_blank">
			<img src="https://media.enzactainternational.com/iboblast/slides/MX/260903_Banner_SO_M4gnesio_month.jpg" width="700" height="110" alt="M4gnesio | Producto del mes" />
		</a>
    </div>
	<!-- 2 --->
	<div>
		<a href="https://wwwmx.enzacta.com/mx/producto/paquete-biovital-360" target="_blank">
			<img src="https://media.enzactainternational.com/iboblast/slides/MX/260701_Banner_SO_BioVital.jpg" width="700" height="110" alt="Paquete Biovital " />
		</a>
    </div>

	<!-- 3 -->
	<div>
		<a href="https://www.youtube.com/watch?v=zulG9qK5v6M" target="_blank">
			<img src="https://media.enzactainternational.com/iboblast/slides/MX/260505_Banner_SO_links.jpg" width="700" height="110" alt=" Links personalizados con ENZACTA" />
		</a>
	</div>

	<!-- 4 -->
	<div>
		<a href="https://media.enzactainternational.com/iboblast/IBOBlast2026/IBOBlastMX26/blastMXSP260116et.html" target="_blank">
			<img src="https://media.enzactainternational.com/iboblast/slides/MX/PlanReferidos2026-smartOFFICE.jpg" width="700" height="110" alt="Plan de Referidos" />
		</a>
	</div>

	<!-- 5 -->
	<div>
		<a href="<?php echo $final_url; ?>" target="_blank">
			<img src="https://media.enzactainternational.com/iboblast/slides/MX/260505_Banner_SO_Catalogo.jpg" width="700" height="110" alt="Descarga nuestro catálogo" />
		</a>	
	</div>

</div>