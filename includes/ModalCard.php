<?php /* includes/ModalCard.php */ ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- ── MODAL ─────────────────────────────────────────── -->
<div class="modal-curso-overlay" id="modalCurso" role="dialog" aria-modal="true">
    <div class="modal-curso-box">

        <button class="modal-cerrar" id="modalCerrar" aria-label="Cerrar">✕</button>
        <!-- Banner escritorio -->
        <img class="modal-curso-banner modal-banner-desktop" id="modalBanner"
             src="/img/BannerModal.svg" alt="WAB Capacitaciones">
        <!-- Banner móvil -->
        <img class="modal-curso-banner modal-banner-movil"
             src="/img/BannerModalMovil.svg" alt="WAB Capacitaciones">

        <div class="modal-curso-body">

            <div class="modal-curso-header">
                <h2 class="modal-curso-titulo" id="modalTitulo"></h2>
                <div class="modal-curso-meta">
                    <span class="modal-status" id="modalStatus"></span>
                    <span class="modal-precio" id="modalPrecio"></span>
                </div>
            </div>

            <!-- Chips: dirigido a · duración · modalidad · herramientas -->
            <div class="modal-info-rapida" id="modalInfoRapida"></div>

            <div class="modal-divider"></div>

            <!-- Módulos -->
            <p class="modal-section-label">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
                Contenido del programa
            </p>
            <div id="modalModulos"></div>

            <!-- Resultados -->
            <div class="modal-resultados" id="modalResultados" style="display:none;"></div>

            <!-- QR -->
            <div class="modal-qr-zona" id="modalQrZona" style="display:none;">
                <img class="modal-qr-img" id="modalQrImg" src="" alt="QR Certificado">
                <div class="modal-qr-texto">
                    <strong>Certificado incluido</strong>
                    Escanea el QR para previsualizar el certificado que obtendrás al completar este programa.
                </div>
            </div>

        </div>

        <!-- Botón FIJO inferior, fuera del scroll -->
        <div class="modal-footer-fijo">
            <button class="modal-btn-inscribirse" id="modalBtnInscribirse">
                Inscribirme en este programa
            </button>
        </div>

    </div>
</div>

<!-- ── CSS ───────────────────────────────────────────── -->
<style>
.modal-curso-overlay {
    display: none; position: fixed; inset: 0;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px);
    z-index: 9999; justify-content: center; align-items: center;
    padding: 20px; opacity: 0; transition: opacity 0.3s ease;
}
.modal-curso-overlay.activo   { display: flex; }
.modal-curso-overlay.entrando { opacity: 1; }

.modal-curso-box {
    background: #fff; border-radius: 20px;
    width: 100%; max-width: 750px; max-height: 92vh;
    display: flex; flex-direction: column;
    box-shadow: 0 30px 70px rgba(0,0,0,0.22);
    transform: translateY(28px) scale(0.97);
    transition: transform 0.38s cubic-bezier(0.34,1.56,0.64,1), opacity 0.3s ease;
    opacity: 0; overflow: hidden; position: relative;
}
.modal-curso-overlay.entrando .modal-curso-box {
    transform: translateY(0) scale(1); opacity: 1;
}

.modal-cerrar {
    position: absolute; top: 12px; right: 14px;
    background: rgba(255,255,255,0.92); border: none; border-radius: 50%;
    width: 32px; height: 32px; font-size: 15px; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    z-index: 10; color: #444;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    transition: background 0.2s, transform 0.2s;
}
.modal-cerrar:hover { background: #fff; transform: scale(1.1); }

.modal-curso-banner {
    width: 100%; height: 265px; object-fit: cover;
    flex-shrink: 0; border-radius: 20px 20px 0 0; display: block;
}
/* Escritorio: muestra desktop, oculta móvil */
.modal-banner-movil  { display: none; }
.modal-banner-desktop{ display: block; }

@media (max-width: 600px) {
    /* Móvil: muestra móvil, oculta desktop */
    .modal-banner-desktop { display: none; }
    .modal-banner-movil   { display: block; height: 160px; }
    .modal-curso-box      { border-radius: 16px; }
    .modal-curso-body     { padding: 16px 18px 20px; }
}

.modal-curso-body {
    overflow-y: auto; padding: 22px 26px 28px; flex: 1;
    scrollbar-width: thin; scrollbar-color: #b2dde4 #f4f4f4;
}
.modal-curso-body::-webkit-scrollbar { width: 5px; }
.modal-curso-body::-webkit-scrollbar-track { background: #f4f4f4; border-radius: 10px; }
.modal-curso-body::-webkit-scrollbar-thumb { background: #b2dde4; border-radius: 10px; }

.modal-curso-header {
    display: flex; justify-content: space-between;
    align-items: flex-start; margin-bottom: 14px; gap: 12px;
}
.modal-curso-titulo {
    font-size: 1.15rem; font-weight: 700;
    color: #0d3d4f; margin: 0; line-height: 1.3;
}
.modal-curso-meta { text-align: right; flex-shrink: 0; }

.modal-status {
    display: inline-block; padding: 3px 11px;
    border-radius: 20px; font-size: 0.7rem; font-weight: 700;
    letter-spacing: 0.05em; margin-bottom: 5px;
}
.modal-status.activo       { background: #dcfce7; color: #166534; }
.modal-status.expirado     { background: #fee2e2; color: #991b1b; }
.modal-status.proximamente { background: #fef9c3; color: #854d0e; }

.modal-precio { font-size: 1rem; font-weight: 700; color: #1a7b8a; display: block; }

/* Info rápida chips */
.modal-info-rapida { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 16px; }
.modal-info-chip {
    display: inline-flex; align-items: flex-start; gap: 6px;
    background: #f4fafb; border: 1px solid #d6ecf0;
    border-radius: 8px; padding: 7px 13px;
    font-size: 0.76rem; color: #1a5c6e; font-weight: 500; line-height: 1.4;
    max-width: 340px;
}
.modal-info-chip svg { flex-shrink: 0; margin-top: 1px; opacity: 0.65; }

.modal-divider { height: 1px; background: #eef4f6; margin: 4px 0 16px; }

.modal-section-label {
    font-size: 0.7rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.08em; color: #1a7b8a;
    display: flex; align-items: center; gap: 6px; margin-bottom: 10px;
}

/* Módulos */
.modulo-item {
    border: 1px solid #e8f2f5; border-radius: 10px;
    margin-bottom: 6px; overflow: hidden; transition: box-shadow 0.2s;
}
.modulo-item:hover { box-shadow: 0 2px 10px rgba(26,123,138,0.07); }

.modulo-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 10px 14px; cursor: pointer; user-select: none;
    background: #f8fbfc; transition: background 0.2s;
}
.modulo-header:hover { background: #edf7f9; }

.modulo-header-left {
    display: flex; align-items: center; gap: 9px;
    font-weight: 600; font-size: 0.84rem; color: #0d3d4f;
}
.modulo-num {
    width: 24px; height: 24px; background: #1a7b8a; border-radius: 6px;
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 0.68rem; font-weight: 700; flex-shrink: 0;
}
.modulo-chevron {
    width: 14px; height: 14px; transition: transform 0.3s ease;
    color: #bbb; flex-shrink: 0;
}
.modulo-item.abierto .modulo-chevron { transform: rotate(180deg); }

.modulo-contenido {
    max-height: 0; overflow: hidden;
    transition: max-height 0.35s ease, padding 0.2s ease;
    padding: 0 14px; font-size: 0.96rem; color: #4a5568; line-height: 1.78;
}
.modulo-item.abierto .modulo-contenido { max-height: 400px; padding: 10px 14px 13px; }

.modulo-lista { list-style: none; margin: 0; padding: 0; }
.modulo-lista li { padding: 3px 0 3px 16px; position: relative; }
.modulo-lista li::before {
    content: ''; position: absolute; left: 0; top: 9px;
    width: 5px; height: 5px; border-radius: 50%; background: #1a7b8a; opacity: 0.5;
}

/* Resultados */
.modal-resultados {
    margin-top: 18px; background: #f0faf7;
    border: 1px solid #c3e8de; border-radius: 12px; padding: 15px 18px;
}
.modal-resultados-titulo {
    font-size: 0.7rem; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.08em; color: #0e6e5e;
    display: flex; align-items: center; gap: 6px; margin-bottom: 10px;
}
.modal-resultado-item {
    display: flex; align-items: flex-start; gap: 8px;
    font-size: 0.83rem; color: #1a3c4e; padding: 4px 0; line-height: 1.45;
}
.modal-resultado-check {
    width: 16px; height: 16px; background: #1a9e80; border-radius: 50%;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px;
}
.modal-resultado-check svg { width: 9px; height: 9px; }

/* QR */
.modal-qr-zona {
    margin-top: 16px; padding: 13px;
    background: linear-gradient(135deg,#f0f9fb,#e6f4f7);
    border-radius: 12px; border: 1px dashed #a5d5de;
    display: flex; align-items: center; gap: 14px;
}
.modal-qr-img {
    width: 64px; height: 64px; border-radius: 8px;
    object-fit: contain; background: #fff;
    padding: 4px; border: 1px solid #cce8ee; flex-shrink: 0;
}
.modal-qr-texto { font-size: 0.8rem; color: #1a3c4e; line-height: 1.5; }
.modal-qr-texto strong { display: block; margin-bottom: 2px; }


/* Footer fijo con botón */
.modal-footer-fijo {
    padding: 14px 26px 18px;
    background: #fff;
    border-top: 1px solid #eef4f6;
    flex-shrink: 0;
}
/* Botón inscribirse */
.modal-btn-inscribirse {
    display: block; width: 100%; margin-top: 0; padding: 13px;
    background: linear-gradient(135deg,#1a7b8a,#0f5c6e);
    color: #fff; border: none; border-radius: 12px;
    font-size: 0.93rem; font-weight: 700; cursor: pointer; letter-spacing: 0.03em;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 4px 15px rgba(26,123,138,0.3);
}
.modal-btn-inscribirse:hover {
    transform: translateY(-2px); box-shadow: 0 8px 22px rgba(26,123,138,0.4);
}

/* Botón ver detalle en la card */
.btn-ver-detalle {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 8px 16px; margin-bottom: 23px;
    background: transparent; border: 1.5px solid #1a7b8a;
    color: #1a7b8a; border-radius: 25px;
    font-size: 0.81rem; font-weight: 600; cursor: pointer;
    transition: all 0.22s ease; text-decoration: none;
}
.btn-ver-detalle:hover { background: #1a7b8a; color: #fff; }

/* Chips info en la card principal */
.card-info-chips { display: flex; flex-wrap: wrap; gap: 6px; margin: 8px 0 10px; }
.card-chip {
    display: inline-flex; align-items: center; gap: 6px;
    background: #f0f8fa; border: 1px solid #d4edf2;
    border-radius: 6px; padding: 5px 11px;
    font-size: 0.82rem; color: #1a5c6e; font-weight: 500;
}

/* X personalizada del SweetAlert */
.swal-close-custom {
    width: 30px !important;
    height: 30px !important;
    font-size: 1.1rem !important;
    color: #888 !important;
    background: #f4f4f4 !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transition: background 0.2s, color 0.2s !important;
}
.swal-close-custom:hover {
    background: #e8e8e8 !important;
    color: #333 !important;
}
</style>

<!-- ── JAVASCRIPT ─────────────────────────────────────── -->
<script>
(function () {
    const overlay   = document.getElementById('modalCurso');
    const btnCerrar = document.getElementById('modalCerrar');

    const icons = {
        user:  '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        clock: '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        cal:   '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>',
        tool:  '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
        check: '<svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>',
        award: '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>',
        book:  '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>'
    };

    /* ── ABRIR ── */
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.btn-ver-detalle');
        if (!btn) return;

        const d = btn.dataset;

        /* Banner */
        /* Solo el banner desktop cambia si la card tiene imagen propia */
        document.getElementById('modalBanner').src = (d.img && d.img.trim()) ? d.img : '/img/BannerModal.svg';

        /* Título, status, precio */
        document.getElementById('modalTitulo').textContent = d.titulo || '';
        const statusEl = document.getElementById('modalStatus');
        statusEl.textContent = d.statusLabel || '';
        statusEl.className   = 'modal-status ' + (d.status || '');
        document.getElementById('modalPrecio').textContent = d.precio || '';

        /* ── Chips info rápida ── */
        const infoRapida = document.getElementById('modalInfoRapida');
        infoRapida.innerHTML = '';
        [
            { icon: icons.user,  val: d.dirigidoA   },
            { icon: icons.clock, val: d.duracion     },
            { icon: icons.cal,   val: d.modalidad    },
            { icon: icons.tool,  val: d.herramientas },
        ].forEach(function(c) {
            if (!c.val || !c.val.trim()) return;
            const chip = document.createElement('span');
            chip.className = 'modal-info-chip';
            chip.innerHTML = c.icon + '<span>' + c.val + '</span>';
            infoRapida.appendChild(chip);
        });

        /* ── Módulos ── */
        const modulos   = JSON.parse(d.modulos || '[]');
        const container = document.getElementById('modalModulos');
        container.innerHTML = '';
        modulos.forEach(function (mod, i) {
            const item = document.createElement('div');
            item.className = 'modulo-item';

            let contenidoHTML = '';
            if (Array.isArray(mod.temas) && mod.temas.length) {
                contenidoHTML = '<ul class="modulo-lista">' + mod.temas.map(function(t){ return '<li>' + t + '</li>'; }).join('') + '</ul>';
            } else {
                contenidoHTML = '<p style="margin:0">' + (mod.contenido || '') + '</p>';
            }

            item.innerHTML =
                '<div class="modulo-header">' +
                    '<div class="modulo-header-left">' +
                        '<div class="modulo-num">' + (i + 1) + '</div>' +
                        '<span>' + mod.titulo + '</span>' +
                    '</div>' +
                    '<svg class="modulo-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>' +
                '</div>' +
                '<div class="modulo-contenido">' + contenidoHTML + '</div>';

            item.querySelector('.modulo-header').addEventListener('click', function () {
                item.classList.toggle('abierto');
            });
            container.appendChild(item);
        });

        /* ── Resultados ── */
        const resultados   = JSON.parse(d.resultados || '[]');
        const resContainer = document.getElementById('modalResultados');
        if (resultados.length) {
            resContainer.innerHTML = '<div class="modal-resultados-titulo">' + icons.award + '&nbsp; Lo que lograrás</div>' +
                resultados.map(function(r) {
                    return '<div class="modal-resultado-item"><div class="modal-resultado-check">' + icons.check + '</div><span>' + r + '</span></div>';
                }).join('');
            resContainer.style.display = 'block';
        } else {
            resContainer.style.display = 'none';
        }

        /* ── QR ── */
        const qrZona = document.getElementById('modalQrZona');
        if (d.qr && d.qr.trim()) {
            document.getElementById('modalQrImg').src = d.qr;
            qrZona.style.display = 'flex';
        } else {
            qrZona.style.display = 'none';
        }

        /* Links */
        const btnIns = document.getElementById('modalBtnInscribirse');
        btnIns.dataset.linkForm = d.linkForm || '';
        btnIns.dataset.linkWs   = d.linkWs   || '';
        btnIns.dataset.titulo   = d.titulo    || '';

        /* Animar apertura */
        overlay.style.display = 'flex';
        requestAnimationFrame(function () {
            overlay.classList.add('activo');
            requestAnimationFrame(function () { overlay.classList.add('entrando'); });
        });
        document.body.style.overflow = 'hidden';
    });

    /* ── CERRAR ── */
    function cerrarModal() {
        overlay.classList.remove('entrando');
        setTimeout(function () {
            overlay.classList.remove('activo');
            overlay.style.display = 'none';
            document.body.style.overflow = '';
        }, 300);
    }

    btnCerrar.addEventListener('click', cerrarModal);
    overlay.addEventListener('click', function (e) { if (e.target === overlay) cerrarModal(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') cerrarModal(); });

    /* ── SWEETALERT ── */
    document.getElementById('modalBtnInscribirse').addEventListener('click', function () {
        const linkForm = this.dataset.linkForm;
        const linkWs   = this.dataset.linkWs;
        const titulo   = this.dataset.titulo;
        cerrarModal();
        setTimeout(function () {
            Swal.fire({
                title: '¿Cómo deseas inscribirte?',
                html: '<p style="color:#666;font-size:0.87rem;margin-top:4px;">Elige tu método preferido para<br><strong>' + titulo + '</strong></p>',
                showDenyButton: true,
                showCancelButton: false,
                showCloseButton: true,
                confirmButtonText: '<i class="fa-brands fa-whatsapp"></i>&nbsp; Por WhatsApp',
                denyButtonText:    '<i class="fa-solid fa-envelope"></i>&nbsp; Por Formulario',
                confirmButtonColor: '#25D366',
                denyButtonColor:    '#1a7b8a',
                customClass: {
                    closeButton: 'swal-close-custom'
                }
            }).then(function (result) {
                if (result.isConfirmed)   window.open(linkWs, '_blank');
                else if (result.isDenied) window.open(linkForm, '_blank');
            });
        }, 320);
    });

})();
</script>