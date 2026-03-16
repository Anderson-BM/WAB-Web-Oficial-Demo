
<?php include '../includes/navbar.php'; ?>

<!-- LOGO DE LA EMPRESA -->
<!--<div class="contenedor-logo">
    <img src="/img/LOGO-WAB.png" alt="Logo" class="logo-empresa-capacitaciones">
    <h1 class="texto-empresa">
        <span class="capacitaciones">SOBRE NOSOTROS, CONOCE NUESTRA HISTORIA</span>
    </h1>
</div> -->
   <br><br><br>
        <section class="services-Blog">
        <h1>¡Sobre Nosotros, Conoce nuestra historia!</h1>
    </section>
<section id="sobre-nosotros" class="sobre-nosotros">
  <div class="container">
    <div class="grid-nosotros">
      <div class="card-nosotros">
        <i class="fas fa-landmark icono-nosotros"></i>
        <h3>Historia WAB Servicios</h3>
        <p>WAB Consultoría nace para ayudar a las empresas a tomar mejores decisiones financieras.</p>
      </div>

      <div class="card-nosotros">
        <i class="fas fa-landmark icono-nosotros"></i>
        <h3>Historia de WAB Capacitaciones</h3>
        <p>WAB Capacitaciones surge para brindar formación práctica y accesible en el área contable y tributaria.</p>
      </div>

      <div class="card-nosotros">
        <i class="fas fa-bullseye icono-nosotros"></i>
        <h3>Misión</h3>
        <p>Brindar soluciones prácticas en consultoría financiera y formación contable</p>
      </div>

      <div class="card-nosotros">
        <i class="fas fa-eye icono-nosotros"></i>
        <h3>Visión</h3>
        <p>Ser una referencia en servicios financieros y capacitación contable.</p>
      </div>
    </div>

    <div class="contenedor-logo">
      <i class="fas fa-star icono-nosotros"></i>
      <h3>Valores</h3>
      <ul class="valores-lista">
        <li>Ética</li>
        <li>Profesionalismo</li>
        <li>Responsabilidad</li>
        <li>Transparencia</li>
      </ul>
    </div>
  </div>
</section>

<br><br><br><br><br>

<!-- NUESTRO EQUIPO -->
<div class="contenedor-logo">
  <h1 class="texto-empresa">
    <span class="wabb">Nuestro Equipo</span>
  </h1>
</div>
<div class="equipo">
  <div class="equipo-grid">

    <!-- Miembros (todos correctos) -->
    <!-- Copié aquí todos los que tú pusiste y corregí etiquetas abiertas y cerradas -->

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo1.png" alt="Gerente General / CEO">
      <h4>Lic. Wilmer Acosta Batista</h4>
      <p>Gerente General / CEO</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Wilmer'); return false;">Leer Más</a>
      </div>
    </div>

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo8.jpg" alt="Director General de Capacitaciones">
      <h4>Lic. Gisanny Perdomo</h4>
      <p>Directora General de Capacitaciones</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Gisanny'); return false;">Leer Más</a>
      </div>
    </div>

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo3.png" alt="Auditora Senior">
      <h4>Lic. Krysel Ortiz Mendez</h4>
      <p>Auditora Financiera</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Krysel'); return false;">Leer Más</a>
      </div>
    </div>

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/VictoriaUpdate...png" alt="Auditora Senior">
      <h4>Victoria Yannelly Perez</h4>
      <p>Licenciada en Contaduría Pública </p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Victoria'); return false;">Leer Más</a>
      </div>
    </div>

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo9.png" alt="Consultora fiscal y financiera">
      <h4>Lic. Diana Celeste Cabrera</h4>
      <p>Contadora General</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Diana'); return false;">Leer Más</a>
      </div>
    </div>
  
    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo4.jpg" alt="Consultora fiscal y financiera">
      <h4>Lic. Elizabeth Lucia Tejada</h4>
      <p>Consultora fiscal y financiera</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('Elizabeth'); return false;">Leer Más</a>
      </div>
    </div>
    

    
    </div>

  </div>
</div>

<!-- Modal Iverson (separado del grid) -->
<div id="memberModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" onclick="closeModal()">&times;</span>
      <h3>Perfil Profesional</h3>
    </div>
    <div class="modal-body">
      <div class="profile-section">
        <div class="profile-image">
          <img src="/img/Nuestro-Equipo/IversonCV.png" alt="Iverson Inoel Rosario">
        </div>
        <div class="profile-info">
          <h4>Ing. Iverson Inoel Rosario</h4>
          <div class="role">Arquitecto de Desarrollo de Software</div>
          <div class="description">
            Ingeniero especializado en arquitectura de software con más de 8 años de experiencia...
          </div>
        </div>
      </div>

      <div class="skills">
        <h5>Habilidades Técnicas</h5>
        <div class="skill-tags">
          <span class="skill-tag">JavaScript</span>
          <span class="skill-tag">Python</span>
          <span class="skill-tag">React</span>
          <span class="skill-tag">Node.js</span>
          <span class="skill-tag">Cloud Computing</span>
          <span class="skill-tag">DevOps</span>
          <span class="skill-tag">Microservicios</span>
          <span class="skill-tag">Bases de Datos</span>
        </div>
      </div>

      <div class="contact-info">
        <h5>Información de Contacto</h5>
        <p><strong>Email:</strong> iverson.rosario@empresa.com</p>
        <p><strong>LinkedIn:</strong> /in/iverson-rosario</p>
        <p><strong>Experiencia:</strong> 8+ años</p>
      </div>
    </div>
  </div>

</div>
    </div>
   
<!-- NUESTRO EQUIPO
<div class="contenedor-logo">
  <h1 class="texto-empresa">
    <span class="wabb">Programadores encargados de el desarrollo de esta WEB!</span>
  </h1>
</div>
<div class="equipo">
  <div class="equipo-grid">
    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo6.png" alt="Arquitecto de Desarrollo de Software">
      <h4>Ing. Anderson Batista Mateo</h4>
      <p>Arquitecto de Desarrollo de Software</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('anderson'); return false;">Leer Más</a>
      </div>
    </div>

    <div class="miembro">
      <img src="/img/Nuestro-Equipo/Equipo7.png" alt="Arquitecto de Desarrollo de Software">
      <h4>Ing. Iverson Inoel Rosario</h4>
      <p>Arquitecto de Desarrollo de Software</p>
      <div class="course-badge-Info">
        <a href="#" onclick="openModal('iverson'); return false;">Leer Más</a>
      </div>
    </div>
    </div>
    </div>
<br><br><br><br> <br><br><br><br> -->

    <section class="clientes-section">
        <!-- HEADER DE LA SECCIÓN -->
        <div class="contenedor-logo">
            <div class="decoracion-izq"></div>
            <div class="decoracion-der"></div>
            <h1 class="texto-empresa">
                <span class="wabb">Empresas que confían en nuestros servicios</span>
            </h1>
        </div>

       
        <div class="clientes-container">
            <div class="clientes-scroll">
                <div class="cliente-item">
                    <img src="/img/Clientes/Pollo.png" alt="Cliente 1" class="cliente-logo">
                    <div class="cliente-nombre">POLLOTEKA</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/Yencris.jpg" alt="Cliente 2" class="cliente-logo">
                    <div class="cliente-nombre">Yencris Trasporte SRL</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/volviendoalcampitores.png" alt="Cliente 3" class="cliente-logo">
                    <div class="cliente-nombre">Restaurante Volviendo Al Campo </div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/JLE.png" alt="Cliente 4" class="cliente-logo">
                    <div class="cliente-nombre">JLE decoraciones</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/Ventanas123.png" alt="Cliente 5" class="cliente-logo">
                    <div class="cliente-nombre">Ventanas 123</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/Imerkaby.png" alt="Cliente 6" class="cliente-logo">
                    <div class="cliente-nombre">Imerkaby constructores</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/Boogoloo events.png" alt="Cliente 7" class="cliente-logo">
                    <div class="cliente-nombre">Boogaloo Eventos</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/D linarez eventos.png" alt="Cliente 8" class="cliente-logo">
                    <div class="cliente-nombre">D'Linares eventos</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/AutoRepuestoReinoso.png" alt="Cliente 9" class="cliente-logo">
                    <div class="cliente-nombre">Auto repuesto reinoso</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/CEAD.png" alt="Cliente 10" class="cliente-logo">
                    <div class="cliente-nombre">Centro de atencion especializado(CEAD)</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/ImpuestosInternos.png" alt="Cliente 1" class="cliente-logo">
                    <div class="cliente-nombre">Impuestos internos</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/FEU.png" alt="Cliente 2" class="cliente-logo">
                    <div class="cliente-nombre">Fundacion evangelica universitaria</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/HasmiCompany.png" alt="Cliente 4" class="cliente-logo">
                    <div class="cliente-nombre">Hasmi company SRL</div>
                </div>

                <div class="cliente-item">
                    <img src="/img/Clientes/AltaMarMaricos.png" alt="Cliente 4" class="cliente-logo">
                    <div class="cliente-nombre">Alta Mar mariscos</div>
                </div>

                

                <div class="cliente-item">
                    <img src="/img/Clientes/EliRousse Travel.png" alt="Cliente 4" class="cliente-logo">
                    <div class="cliente-nombre">Elirousse Travel</div>
                </div>

                

                <div class="cliente-item">
                    <img src="/img/Clientes/Mnaossolidarias.png" alt="Cliente 4" class="cliente-logo">
                    <div class="cliente-nombre">fundacion manos solidarias amor, comprensión y paz</div>
                </div>


            
                <!-- Duplicar para scroll infinito -->
                

                
            </div>
        </div>
    </section>
 <br><br><br><br> <br><br><br><br>


    <!-- CERTIFICADOS DE LA EMPRESA -->
    <div class="contenedor-logo">
    <img src="/img/LOGO-WAB.png" alt="Logo" class="logo-empresa-capacitaciones">
    <h1 class="texto-empresa">
    <span class="wabb">Certificaciones y Membresías</span> 
     </h1>
    </div>

 <!-- =====================================================
     CERTIFICACIONES — Sección mejorada
     Reemplaza el bloque completo de certificaciones
     ===================================================== -->

<!-- Header sección -->
<div class="cert-seccion-header">
    <div class="cert-header-inner">
        <div class="cert-header-icono">
            <img src="/img/LOGO DE CAPACITACIONES.png" alt="WAB" class="cert-header-logo">
        </div>
        <div class="cert-header-texto">
            <p class="cert-header-etiqueta">WAB Consultoría y Asesoría Financiera</p>
            <h2 class="cert-header-titulo">Certificaciones de nuestros estudiantes</h2>
            <p class="cert-header-sub">Estos son algunos de los certificados que han obtenido nuestros estudiantes Destacados ⭐</p>
        </div>
        <div class="cert-header-badge">
            <span class="cert-badge-num" id="certCount">8</span>
            <span class="cert-badge-label">Certificados</span>
        </div>
    </div>
</div>

<!-- Grid de certificados — todo en uno -->
<div class="cert-seccion">
    <div class="cert-grid-nuevo">

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado1.jpg" alt="Nataliz Sánchez Ferrand" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado2.jpg" alt="Jhancel García" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado3.jpg" alt="Johanna Mejía" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado4.jpg" alt="Alba M. Mateo Beriguete" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certficado5.jpg" alt="Treisy Yemil Mesa Melo" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado6.jpg" alt="Daniela M. Tejada Morán" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado7.jpg" alt="Mayerín Sierra Genao" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

        <div class="cert-item">
            <img src="/img/img-Capacitaciones/Certificado8.jpg" alt="Kissairis Leandra Torres" loading="lazy">
            <div class="cert-overlay">
                <span class="cert-overlay-icon">🔍</span>
            </div>
        </div>

    </div>
</div>

</section> <br><br><br><br> <br><br><br><br><br><br>

<!-- Mensaje Motivador mas contenido... -->
    <div class="contenedor-logo">
        <img src="/img/LOGO-WAB.png" alt="Logo" class="logo-empresa-capacitaciones">
        <h1 class="texto-empresa">
            <div class="info-badge">Informacion de manera detallada</div>
            <span class="wabb">Historia detallada de WAB Servicios y Capacitaciones</span> 
            <span class="capacitaciones"></span>
        </h1>
    </div>

    <!-- SECCIÓN INFORMATIVA -->
    <div class="info-section">
        <div class="info-grid">
            <div class="info-card">
                <div class="info-badge">WAB Servicios Empresariales</div>
               
                <div class="info-content">
<h2>Historia de WAB Servicios</h2>
<p>WAB Consultoría y Asesoría Financiera surge de la pasión por ofrecer soluciones integrales que impulsen el crecimiento y la estabilidad económica de empresas y profesionales. Fundada con el propósito de convertir la complejidad financiera en oportunidades, WAB nace del encuentro entre expertos en finanzas, contabilidad y gestión de negocios, comprometidos con un aprendizaje continuo y la mejora de resultados tangibles.
Desde nuestros primeros días, identificamos que muchas organizaciones enfrentan desafíos como la falta de visión sobre su flujo de caja, la incertidumbre en el cumplimiento tributario y la dificultad para elaborar estrategias de inversión y financiamiento. Para responder a esas necesidades, diseñamos un portafolio de servicios que abarca desde la planificación financiera y la optimización tributaria, hasta la elaboración de presupuestos, el análisis de riesgos y la formación de equipos internos.
A lo largo de los años, hemos acompañado a clientes de distintos sectores —pymes, startups y grandes corporativos—, convirtiéndonos en aliados estratégicos que aportan:
Transparencia en la interpretación de sus indicadores financieros.
Precisión en el cumplimiento de obligaciones fiscales y normativas.
Visión estratégica para la toma de decisiones de corto, mediano y largo plazo.
Hoy, WAB Consultoría y Asesoría Financiera es más que un proveedor de servicios: es una comunidad de profesionales unida por el mismo compromiso:
> Convertir datos en decisiones, y decisiones en crecimiento sostenible.
Con la mirada puesta en el futuro, seguimos innovando en metodologías, herramientas tecnológicas y programas de formación, siempre con el objetivo de acompañarte en cada paso de tu camino hacia la excelencia financiera.</p>           
</div>
</div>

            <div class="info-card">
                <div class="info-badge">WAB Capacitaciones </div>
           
                <div class="info-content">
<h2>Historia de WAB Capacitaciones</h2>
<p>WAB Capacitaciones nace con el propósito de aportar al desarrollo profesional de estudiantes, técnicos y emprendedores en el área contable y tributaria. Desde nuestros inicios, hemos tenido claro que la educación práctica y accesible es clave para abrir puertas en el mundo laboral y empresarial.
Observamos una realidad común: muchas personas desean crecer profesionalmente, pero no encuentran formación clara, actualizada y adaptada a las exigencias del mercado. Por eso, creamos una alternativa que va más allá de la teoría: capacitaciones diseñadas para aplicar, resolver y avanzar.
Iniciamos ofreciendo cursos presenciales y virtuales centrados en temas como igualas contables, impuestos (IR1, IR2, ITBIS), comprobantes fiscales, retenciones y nómina, logrando impactar a cientos de participantes que hoy se sienten más seguros y preparados para enfrentar los retos del ejercicio contable.
Con el paso del tiempo, nos consolidamos como una comunidad de formación práctica, reconocida por su enfoque personalizado, su claridad al enseñar y su compromiso con la excelencia.
Hoy, WAB Capacitaciones continúa creciendo con una visión firme:
> Formar profesionales con criterio, confianza y herramientas para crear oportunidades y tomar decisiones informadas.
</p>                </div>
            </div>
        </div>
    </div><br><br><br><br><br>

    <script src="/assets/js/scripts.js"></script>

<?php include '../includes/footer.php'; ?>
    