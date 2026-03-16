//-------------------------------------------------------------------------------------------------------------
// CONEXION CON WS PARA QUE EL NUMERO DE TELEFONO FUNCIONE CORRECTAMENTE

document.addEventListener("DOMContentLoaded", () => {
    console.log("Sitio cargado correctamente.");
    const whatsappBtn = document.getElementById("btn-whatsapp");
    if (whatsappBtn) {
        whatsappBtn.addEventListener("click", () => {
            window.open("https://wa.me/18001234567", "_blank");
        });
    }
});
    

//-------------------------------------------------------------------------------------------------------------
// EFECTO DE HAMBURGUESA DE LA BARRA DE NAVEGACION Y ANIMACION A LA MISMA 

       // Efecto de scroll en navbar
      // Navbar scroll efecto
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-custom');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Página activa
document.addEventListener('DOMContentLoaded', function() {
    const currentPage = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
});

// Cerrar navbar en mobile al hacer click
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse.classList.contains('show')) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
            bsCollapse.hide();
        }
    });
});


//-------------------------------------------------------------------------------------------------------------
// DISEÑO Y ANIMACIONES DE EL CATALOGO DE CURSOS ONLINE

 // Agregar interactividad adicional
        document.querySelectorAll('.course-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) rotateX(5deg)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0)';
            });
        });

        // Efecto de paralaje suave
        window.addEventListener('scroll', () => {
            const cards = document.querySelectorAll('.course-card');
            cards.forEach((card, index) => {
                const rect = card.getBoundingClientRect();
                const speed = 0.1 + (index * 0.02);
                const yPos = -(window.scrollY * speed);
                card.style.transform = `translateY(${yPos}px)`;
            });
        });


 // VENTANA EMERGENTE DINAMICA PARA MIEMBROS DEL EQUIPO


// Datos de los miembros del equipo
const teamMembers = {
    'iverson': {
        name: 'Ing. Iverson Inoel Rosario',
        role: 'Arquitecto de Desarrollo de Software',
        image: '/img/Nuestro-Equipo/Equipo7.png',
        description: 'Ingeniero en desarrollo de software y arquitectura de sistemas, con experiencia en la creación de soluciones tecnológicas modernas y escalables. Dominio de tecnologías como Java, C#, .NET, HTML, CSS, JavaScript, React y SQL Server. Enfocado en aportar valor a los proyectos mediante aplicaciones eficientes, orientadas al crecimiento empresarial y la innovación constante.',
        skills: ['Java', 'C#', '.NET', 'Html', 'CSS', 'JavaScript', 'React', 'SqlServer'],
        email: 'iversoninoel@gmail.com',
        linkedin: 'https://www.linkedin.com/in/iverson-rosario-7b9411316/',
        experience: '2+ años'
    },
    'anderson': {
        name: 'Ing. Anderson Batista',
        role: 'Arquitecto de Desarrollo de Software',
        image: '/img/Nuestro-Equipo/Equipo6.png',
        description: 'Profesional con sólida experiencia en desarrollo de software y arquitectura de sistemas. Especializado en diseñar e implementar soluciones tecnológicas innovadoras y escalables, combinando conocimientos en Java, C#, .NET, React y SQL Server. Destacado por su capacidad para crear aplicaciones robustas, orientadas a resultados y adaptadas a las necesidades del cliente.   Portafolio: https://andersonportafolio.netlify.app',
        skills: ['Java', 'C#', '.NET', 'Html', 'CSS', 'JavaScript', 'React', 'SqlServer'],
        email: 'andersonbatistamateo@gmail.com',
        linkedin: 'https://www.linkedin.com/in/anderson-batista-mateo-/',
        experience: '2+ años'
    },
    'Elizabeth': {
        name: 'Lic. Elizabeth Lucia Tejada',
        role: 'Contadora Senior — Especialista en Impuestos y Finanzas',
        image: '/img/Nuestro-Equipo/Equipo4.jpg',
        description: 'Contadora con más de 10 años de experiencia en gestión contable, manejo de impuestos y preparación de estados financieros. Experta en conciliaciones, manejo de nóminas, TSS, Infotep, y software contables como QuickBooks y DAC-Easy.',
        skills: ['Contabilidad General', 'Manejo de Impuestos (606, 607, IR-17, TSS)', 'Conciliaciones Bancarias', 'Manejo de Nóminas y Formularios DGT', 'QuickBooks, Mónica, DAC-Easy'],
        email: 'lizaend02@hotmail.com',
        linkedin: '',
        experience: '+10 años'
    },
    'Diana': {
    name: 'Diana Celeste Cabrera Santos',
        role: 'Contadora General — Especialista en Finanzas y Administración Tributaria',
        image: '/img/Nuestro-Equipo/Equipo9.png',
        description: 'Contadora con sólida experiencia en planificación financiera, gestión tributaria, auditoría y contabilidad general. Experta en impuestos, conciliaciones, control de activos, elaboración de informes financieros y manejo de software como SAP, Dynamics AX y SIGEF.',
        skills: ['Gestión de Impuestos y Cierres Contables', 'Análisis Financiero y Proyección de Flujo de Caja', 'Manejo de TSS, INFOTEP, IR2, IT-1, 606, 607', 'Auditoría y Supervisión de Personal', 'Manejo de Plataformas SAP, SIGEF y Dynamics AX'],
        email: 'santosdianaceleste@gmail.com',
        linkedin: '',
        experience: '10 años'
    },
    'Victoria': {
    name: 'Victoria Yannelly Pérez Rocha',
        role: 'Licenciada en Contaduría Pública Con maestria en Contabilidad de Gestion y Auditoria Integral',
        image: '/img/Nuestro-Equipo/VictoriaUpdate...png',
        description: 'Licenciada en Contaduría Pública Con maestria en Contabilidad de Gestion y Auditoria Integral con más de 10 años de experiencia en auditoría externa, contabilidad y servicios de outsourcing. Especializada en la preparación y análisis de estados financieros, cumplimiento tributario y control interno. Profesional proactiva, organizada y con buenas relaciones interpersonales.',
        skills: ['Preparación y análisis de estados financieros', 'Cierres contables mensuales y anuales', 'Conciliaciones bancarias', 'Declaraciones fiscales y cumplimiento impositivo', 'Auditoría externa y validación de registros contables', 'Manejo de Normas Internacionales de Información Financiera (NIIF)', 'Prevención del Lavado de Activos', 'Inglés intermedio'],
        email: 'perezvictoria0812@gmail.com',
        linkedin: '',
        experience: '+10 años'
    },
    'Krysel': {
        name: 'Krysel Ortiz Méndez',
        role: 'Licenciada en Contaduria Publica, experta en Auditoria Financiera',
        image: '/img/Nuestro-Equipo/Equipo3.png',
        description: 'Licenciada en Contaduría Pública con experiencia en auditoría financiera, contabilidad, asistencia administrativa y servicio al cliente. Reconocida por su liderazgo, proactividad, capacidad organizativa y adaptación al cambio.',
        skills: ['Comunicación eficaz y liderazgo de proyectos', 'Organización, trabajo en equipo, actitud positiva', 'Manejo de Office, SIBA, IDEA, DataSnipper, Caseware', 'Inglés avanzado', 'Declaraciones fiscales: 606, 607, 608, TSS, IR-3, IR-17, IT-1, INFOTEP', 'Análisis financiero, conciliaciones bancarias, arqueos de caja', 'Auditoría de fondos de inversión, documentación y reportes'],
        email: 'Krysel.a@hotmail.com',
        linkedin: '',
        experience: '+7 años'
    },
    'Gisanny': {
        name: 'Lic. Gisanny Perdomo',
        role: 'Licenciada en Mercadeo por la Universidad Autónoma de Santo Domingo.',
        image: '/img/Nuestro-Equipo/Equipo8.jpg',
        description: 'Licenciada en Mercadeo por la Universidad Autónoma de Santo Domingo. Asesora y consultora en marketing digital, con participación en más de 15 seminarios y talleres relacionados con estrategia y planificación de publicidad y redes sociales.',
        skills: ['Marketing digital', 'Estrategia publicitaria', 'Planificación de redes sociales', 'Asesoría y consultoría'],
        email: '',
        linkedin: '',
        experience: '+10 años'
    },
    'Wilmer': {
        name: 'Wilmer Acosta Batista',
        role: 'Licenciado en administración de empresas y contabilidad maestría en administración financiera',
        image: '/img/Nuestro-Equipo/Equipo1.png',
        description: 'Wilmer Acosta Batista— Especialista en Finanzas y Administración Tributaria Contador y administrador con sólida experiencia en planificación financiera, gestión tributaria,  y contabilidad general. Experto en impuestos, conciliaciones, control de activos, elaboración de informes financieros y manejo de software como SAP, Dynamics.',
        skills: ['Dominio del ciclo contable completo', 'Declaraciones fiscales: ITBIS, IR2, IR17 (experto en impuestos)', 'Elaboración de informes financieros', 'Conciliaciones bancarias y control de activos', 'Manejo de software contable: SAP, Dynamics', 'Gestión tributaria y planificación financiera', 'Conocimientos técnicos en informática aplicados a la contabilidad', 'Manejo avanzado de Excel'],
        email: 'lic.wilmer2021@gmail.com',
        linkedin: '',
        experience: '+11 años de experiencia'
    },

};

// Abrir el modal
function openModal(memberId) {
    const member = teamMembers[memberId];
    if (!member) return;

    const modal = createModal(member);
    document.body.appendChild(modal);

    const closeBtn = modal.querySelector('.close');
    closeBtn.addEventListener('click', closeModal);

    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// Crear el modal dinámico
function createModal(member) {
    const modal = document.createElement('div');
    modal.id = 'memberModal';
    modal.className = 'modal';

    modal.innerHTML = `
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h3>Perfil Profesional</h3>
            </div>
            <div class="modal-body">
                <div class="profile-section">
                    <div class="profile-image">
                        <img src="${member.image}" alt="${member.name}">
                    </div>
                    <div class="profile-info">
                        <h4>${member.name}</h4>
                        <div class="role">${member.role}</div>
                        <div class="description">${member.description}</div>
                    </div>
                </div>

                <div class="skills">
                    <h5>Habilidades Técnicas</h5>
                    <div class="skill-tags">
                        ${member.skills.map(skill => `<span class="skill-tag">${skill}</span>`).join('')}
                    </div>
                </div>

                <div class="contact-info">
                <h5>Información de Contacto</h5>
                <p><strong>Email:</strong> ${member.email || 'No disponible'}</p>
                <p><strong>LinkedIn:</strong> ${
                member.linkedin
                ? `<a href="${member.linkedin}" target="_blank" rel="noopener noreferrer" style="color:#0077b5; text-decoration:none;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">LinkedIn</a>`
                : 'No disponible'
                }</p>
            <p><strong>Experiencia:</strong> ${member.experience || 'No disponible'}</p>
            </div>
            </div>
        </div>
    `;

    return modal;
}

// Cerrar el modal
function closeModal() {
    const modal = document.getElementById('memberModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
        document.body.removeChild(modal);
    }
}

// Listeners globales
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(event) {
        const modal = document.getElementById('memberModal');
        if (modal && event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
});