
<section class="contact-section" id="contacto">

  <div class="contact-container">

    <!-- Información Principal de Contacto -->
    <div class="contact-main-info" data-aos="fade-up">
      <h2>¿Cómo contactarnos?</h2>
      <p class="contact-description">
        Estamos aquí para ayudarte con todas tus necesidades legales, contables y fiscales. 
        Comunícate con nosotros a través de cualquiera de estos medios y te brindaremos 
        la asesoría profesional que necesitas.
      </p>
    </div>

    <!-- Formulario de Contacto -->
    <div class="contact-form-section" data-aos="slide-up">
      <h2>Contáctanos</h2>
      <form action="procesar_contacto.php" method="POST" class="contact-form">
        <input type="text" name="nombre" placeholder="Tu nombre completo" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <textarea name="mensaje" rows="5" placeholder="Tu mensaje..." required></textarea>
        <button type="submit" class="btn-contact">Enviar Mensaje</button>
      </form>
    </div>

    <!-- Información de Contacto -->
    <div class="contact-info-grid">
      
      <!-- Dirección y Horarios -->
      <div class="contact-card" data-aos="slide-up">
        <div class="contact-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h3>Nuestra Ubicación</h3>
        <p><strong>Dirección:</strong><br>
        Santo Domingo, C/ Manolo Tavarez Justo #7, Renacimiento, DN</p>
        <p><strong>Horarios de Atención:</strong><br>
        Lunes a Viernes: 8:00 AM - 6:00 PM</p>
      </div>

      <!-- Teléfonos -->
      <div class="contact-card" data-aos="slide-up" data-aos-delay="100">
        <div class="contact-icon">
          <i class="fas fa-phone"></i>
        </div>
        <h3>Teléfonos</h3>
        <p><strong>Servicios Empresariales:</strong><br>
        <a href="tel:+18093231392">+1 (829) 818-5538</a></p>
        <p><strong>Capacitaciones:</strong><br>
        <a href="tel:+18294465538">+1 (809) 446-5538</a></p>
      </div>

      <!-- Email y WhatsApp -->
      <div class="contact-card" data-aos="slide-up" data-aos-delay="200">
        <div class="contact-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <h3>Comunicación Digital</h3>
        <p><strong>Correo Electrónico:</strong><br>
        <a href="mailto:servicios@wabconsultoriard.com">servicios@wabconsultoriard.com</a></p>
        <p><strong>WhatsApp:</strong><br>
        <a href="https://wa.me/18298185538" target="_blank" class="whatsapp-link">
          <i class="fab fa-whatsapp"></i> Chatear ahora
        </a></p>
      </div>

    </div>

    <!-- Servicios de Contacto -->
    <div class="contact-services" data-aos="fade-up" data-aos-delay="300">
      <h3>¿En qué podemos ayudarte?</h3>
      <div class="services-grid">
        <div class="service-item">
          <i class="fas fa-calculator"></i>
          <span>Consultoría Contable</span>
        </div>
        <div class="service-item">
          <i class="fas fa-file-invoice-dollar"></i>
          <span>Asesoría Fiscal</span>
        </div>
        <div class="service-item">
          <i class="fas fa-balance-scale"></i>
          <span>Servicios Legales</span>
        </div>
        <div class="service-item">
          <i class="fas fa-graduation-cap"></i>
          <span>Capacitaciones</span>
        </div>
      </div>
    </div>

    <!-- Mapa -->
    <div class="contact-map" data-aos="zoom-in" data-aos-delay="400">
      <h3>Encuéntranos</h3>
      <div class="mapa">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.41824469453286!2d-69.9097!3d18.4767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDI4JzM2LjEiTiA2OcKwNTQnMzQuOSJX!5e0!3m2!1ses!2sdo!4v1642000000000!5m2!1ses!2sdo" 
          width="100%" 
          height="300" 
          style="border:0; border-radius: 10px;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
      <p class="map-note">
        <i class="fas fa-info-circle"></i>
        Ubicados en el corazón de Santo Domingo, con fácil acceso y estacionamiento disponible.
      </p>
    </div>

  </div>
</section>
<div id="toast" class="toast">¡Mensaje enviado correctamente!</div>

