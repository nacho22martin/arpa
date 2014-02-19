/*custom.min*/
	
jQuery(document).ready(function($){
	//portfolio - show link
	$('.what-we-do-2 .span3').hover(
		function () {
			$(this).children('.fdw-background').animate({opacity:'1'});
		},
		function () {
			$(this).children('.fdw-background').animate({opacity:'0'});
		}
	);	

	$("#outsource").on("click", function(){
		 $('#happ').removeClass('boxShadow');
		 $('#optim').removeClass('boxShadow');	
		 $('#comun').removeClass('boxShadow');
		 $('#mkt').removeClass('boxShadow');
		 $('#outs').addClass('boxShadow');	 
		 $("#service").hide();
	     $("#service").html("<h4>Outsourcing Comercial</h4><p><b>Departamento Comercial:</b> estructuración, selección del RRHH calificado, planificación estratégica a resultados, servicio de post venta.</br><b>Outsourcing comercial:</b> tercerización de fuerza de ventas, equipos comerciales externos, entrenamiento a vendedores.</br><b>Broker:</b> estudio de mercado y gestión para la generación de nuevos canales de ventas y nuevos negocios.</br><b>Fidelización de Clientes:</b> sistemas de captación y retención de clientes implementando estrategias sostenibles.</br><b>Servicio de callcenter:</b> estructuración de fuerza de venta a través un centro de llamadas; departamentos de atención a clientes, atención de reclamos, comercialización de todo tipo de productos.</p>").fadeIn("slow");

	});

	$("#comunicacion").on("click", function(){
		 $('#happ').removeClass('boxShadow');
		 $('#optim').removeClass('boxShadow');	
		 $('#comun').addClass('boxShadow');
		 $('#mkt').removeClass('boxShadow');
		 $('#outs').removeClass('boxShadow');
	/*	 var temp = $("#service");
		 $(temp).hide();*/
		 $("#service").hide();
	     $("#service").html("<h4>Comunicación organizacional</h4><p>&bull; <b>Diagnóstico y Planificación Estratégica:</b> trabajamos con comunicaciones internas y externas. Optimizamos los flujos comunicacionales entre todos los grupos de interés de la organización a través de un Plan de Acción Integral y un posterior acompañamiento para su implementación exitosa.</p><p>&bull; <b>Identidad Corporativa:</b> definición de visión, misión, valores. Acompañamos el proceso de elaboración, comunicación y desarrollamos actividades para socializarlo entre los grupos de interés de la organización.</p><p>&bull; <b>Imagen Corporativa:</b> aplicabilidad de logotipos, desarrollo de brochures, página web, otros materiales institucionales, etc.</p><p>&bull; <b>Diseño de Planes y de Áreas de Comunicación:</b> aplicados a la empresa, a proyectos sociales y de cooperaciones, y/o a productos específicos.</p><p>&bull; <b>Capacitación:</b> estructuración de un plan de comunicación; organización de las comunicaciones internas y externas, entre otras.</p>").fadeIn("slow");

	});

	$("#optimizacion").on("click", function(){
		 $('#happ').removeClass('boxShadow');
		 $('#optim').addClass('boxShadow');	
		 $('#comun').removeClass('boxShadow');
		 $('#mkt').removeClass('boxShadow');
		 $('#outs').removeClass('boxShadow');
		 $("#service").hide();
	     $('#service').html("<h4>Optimización y Gestión de Procesos</h4><p>A través de un grupo de ingenieros especializado en la gestión de procesos productivos y organizacionales, desarrollamos e implementamos herramientas de gestión, control y simulación de procesos, con lo cual se logra estimar resultados, entender los procesos actuales, ensayar nuevas ideas. El objetivo es lograr organizaciones y procesos efectivos, reducción costos y mejorar la toma de decisiones. En un contexto caracterizado por el dinamismo, la complejidad y la tecnología, brindamos las soluciones adecuadas para cada caso.</p><p>&bull; <b>Simulación de procesos a medida</b></p><p>&bull; <b>Organización, mejora y gestión de procesos</b></p><p>&bull; <b>Implementación de indicadores automáticos de producción</b></p><p>&bull; <b>Venta de licencias de software de simulación</b></p><p>&bull; <b>Capacitación y entrenamiento de personal en nuevas herramientas y técnicas</b></p>").fadeIn("slow");

	});

	$("#happier").on("click", function(){
	     $('#happ').addClass('boxShadow');
		 $('#optim').removeClass('boxShadow');	
		 $('#comun').removeClass('boxShadow');
		 $('#mkt').removeClass('boxShadow');
		 $('#outs').removeClass('boxShadow');
		 $("#service").hide();
	     $('#service').html("<h4>Happier</h4><p>Herramienta aplicada a cualquier tipo de empresa u organización, que tiene como objetivo mejorar la salud y el bienestar de las personas que la componen y así volverlas más creativas, resilientes y felices. Combina los avances de las neurociencias con la dinámica de sistemas y tecnología apropiada en salud, para ofrecer nuevas soluciones a viejos problemas.</p><p><b>La propuesta:</b> proponemos nuevas estrategias para solucionar problemas de las organizaciones con neurociencia aplicada al Management, y la incorporación de nuevos paradigmas para ofrecer soluciones duraderas. </p><p><b>El método:</b> nuestra metodología contiene un paulatino y cuidadoso desarrollo desde una mirada integrativa, inter y transdisciplinaria, indispensable para abordar temas completos. </p><p><b>Las actividades:</b> ofrecemos programas interactivos de capacitación y aplicación de metodología de actividades de bienestar en los niveles personal, interpersonal y organizacional. </p><p><b>El resultado:</b> mejorar la calidad de vida, fomentar un trabajo más saludable impactando positivamente en el desempeño laboral y la sostenibilidad e la organización. </p><p><a href='www.happier.com.ar'>www.happier.com.ar</a></p>").fadeIn("slow");

	});
	
	$("#mktg").on("click", function(){
	     $('#happ').removeClass('boxShadow');
		 $('#optim').removeClass('boxShadow');	
		 $('#comun').removeClass('boxShadow');
		 $('#mkt').addClass('boxShadow');
		 $('#outs').removeClass('boxShadow');
		 $("#service").hide();
	     $('#service').html("<h4>Marketing</h4><h5>Plan de MKT</h5><p>El Plan evalúa la realidad de la empresa determinado sus: fortalezas, oportunidades, debilidades y amenazas. </br> Se establecen los objetivos que se desean alcanzar, y las estrategias y acciones correspondientes para alcanzar las metas de la empresa. </p><h5>Posicionamiento</h5><p>Creamos y ejecutamos las estrategias de manera que la empresa / producto ocupe el primer lugar en la mente de los consumidores.</br>Creamos diferenciación y desarrollamos conceptos de experiencias.</p><h5>Trade MKT</h5><p>Desarrollamos estrategias y planes de marketing direccionados a los canales de distribución y creando sinergia en toda la cadena: empresa, clientes, consumidores y FFVV.</p><h5>Eventos CO.</h5><p>Diseñamos , planificamos y nos encargamos de la producción de eventos corporativos.</p>").fadeIn("slow");

	});
	

	var hash = window.location.hash;

	if (hash == "#collapseOne" ) {
	 $('#outs').addClass('boxShadow');
	 $("#service").hide();
	 $("#service").html("<h4>Outsourcing Comercial</h4><p><b>Departamento Comercial:</b> estructuración, selección del RRHH calificado, planificación estratégica a resultados, servicio de post venta.</br><b>Outsourcing comercial:</b> tercerización de fuerza de ventas, equipos comerciales externos, entrenamiento a vendedores.</br><b>Broker:</b> estudio de mercado y gestión para la generación de nuevos canales de ventas y nuevos negocios.</br><b>Fidelización de Clientes:</b> sistemas de captación y retención de clientes implementando estrategias sostenibles.</br><b>Servicio de callcenter:</b> estructuración de fuerza de venta a través un centro de llamadas; departamentos de atención a clientes, atención de reclamos, comercialización de todo tipo de productos.</p>").fadeIn("slow");

	}
	if (hash == "#collapseTwo" ) {
	$('#comun').addClass('boxShadow');
	$("#service").hide();
	$("#service").html("<h4>Comunicación organizacional</h4><p>&bull; <b>Diagnóstico y Planificación Estratégica:</b> trabajamos con comunicaciones internas y externas. Optimizamos los flujos comunicacionales entre todos los grupos de interés de la organización a través de un Plan de Acción Integral y un posterior acompañamiento para su implementación exitosa.</p><p>&bull; <b>Identidad Corporativa:</b> definición de visión, misión, valores. Acompañamos el proceso de elaboración, comunicación y desarrollamos actividades para socializarlo entre los grupos de interés de la organización.</p><p>&bull; <b>Imagen Corporativa:</b> aplicabilidad de logotipos, desarrollo de brochures, página web, otros materiales institucionales, etc.</p><p>&bull; <b>Diseño de Planes y de Áreas de Comunicación:</b> aplicados a la empresa, a proyectos sociales y de cooperaciones, y/o a productos específicos.</p><p>&bull; <b>Capacitación:</b> estructuración de un plan de comunicación; organización de las comunicaciones internas y externas, entre otras.</p>").fadeIn("slow");

	}

	if (hash == "#collapseThree" ) {
	$('#optim').addClass('boxShadow');
	$("#service").hide();
	$('#service').html("<h4>Optimización y Gestión de Procesos</h4><p>A través de un grupo de ingenieros especializado en la gestión de procesos productivos y organizacionales, desarrollamos e implementamos herramientas de gestión, control y simulación de procesos, con lo cual se logra estimar resultados, entender los procesos actuales, ensayar nuevas ideas. El objetivo es lograr organizaciones y procesos efectivos, reducción costos y mejorar la toma de decisiones. En un contexto caracterizado por el dinamismo, la complejidad y la tecnología, brindamos las soluciones adecuadas para cada caso.</p><p>&bull; <b>Simulación de procesos a medida</b></p><p>&bull; <b>Organización, mejora y gestión de procesos</b></p><p>&bull; <b>Implementación de indicadores automáticos de producción</b></p><p>&bull; <b>Venta de licencias de software de simulación</b></p><p>&bull; <b>Capacitación y entrenamiento de personal en nuevas herramientas y técnicas</b></p>").fadeIn("slow");

	}
	if (hash == "#collapseFour" ) {
	$('#happ').addClass('boxShadow');
	$("#service").hide();
	$('#service').html("<h4>Happier</h4><p>Herramienta aplicada a cualquier tipo de empresa u organización, que tiene como objetivo mejorar la salud y el bienestar de las personas que la componen y así volverlas más creativas, resilientes y felices. Combina los avances de las neurociencias con la dinámica de sistemas y tecnología apropiada en salud, para ofrecer nuevas soluciones a viejos problemas.</p><p><b>La propuesta:</b> proponemos nuevas estrategias para solucionar problemas de las organizaciones con neurociencia aplicada al Management, y la incorporación de nuevos paradigmas para ofrecer soluciones duraderas. </p><p><b>El método:</b> nuestra metodología contiene un paulatino y cuidadoso desarrollo desde una mirada integrativa, inter y transdisciplinaria, indispensable para abordar temas completos. </p><p><b>Las actividades:</b> ofrecemos programas interactivos de capacitación y aplicación de metodología de actividades de bienestar en los niveles personal, interpersonal y organizacional. </p><p><b>El resultado:</b> mejorar la calidad de vida, fomentar un trabajo más saludable impactando positivamente en el desempeño laboral y la sostenibilidad e la organización. </p><p><a href='www.happier.com.ar'>www.happier.com.ar</a></p>").fadeIn("slow");

	}
	if (hash == "#collapseFive" ) {
	$('#mkt').addClass('boxShadow');
	$("#service").hide();
	$('#service').html("<h4>Marketing</h4><h5>Plan de MKT</h5><p>El Plan evalúa la realidad de la empresa determinado sus: fortalezas, oportunidades, debilidades y amenazas. </br> Se establecen los objetivos que se desean alcanzar, y las estrategias y acciones correspondientes para alcanzar las metas de la empresa. </p><h5>Posicionamiento</h5><p>Creamos y ejecutamos las estrategias de manera que la empresa / producto ocupe el primer lugar en la mente de los consumidores.</br>Creamos diferenciación y desarrollamos conceptos de experiencias.</p><h5>Trade MKT</h5><p>Desarrollamos estrategias y planes de marketing direccionados a los canales de distribución y creando sinergia en toda la cadena: empresa, clientes, consumidores y FFVV.</p><h5>Eventos CO.</h5><p>Diseñamos , planificamos y nos encargamos de la producción de eventos corporativos.</p>").fadeIn("slow");

	}
	
});

