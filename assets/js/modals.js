/**
 * MODALS (générique)
 * - ouvre/ferme
 * - ferme au clic extérieur
 * - ferme avec ESC
 * - empêche le scroll du body
 */
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;

  modal.style.display = 'flex';
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';

  // focus sur le bouton fermer (meilleur UX)
  const closeBtn = modal.querySelector('.close-btn');
  if (closeBtn) closeBtn.focus();
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;

  modal.style.display = 'none';
  modal.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
}

/**
 * PDF Modal
 */
function openPDFModal(pdfPath, title = 'Document PDF') {
  const frame = document.getElementById('pdfFrame');
  const dl = document.getElementById('downloadPDF');
  const modal = document.getElementById('pdfModal');
  const titleEl = document.getElementById('pdfTitle');

  // fallback si la modal n'existe pas
  if (!frame || !dl || !modal) {
    window.open(pdfPath, '_blank', 'noopener');
    return;
  }

  frame.src = pdfPath;
  dl.href = pdfPath;
  if (titleEl) {
    titleEl.textContent = window.translateText ? window.translateText(title) : title;
  }

  openModal('pdfModal');
}

function closePDFModal() {
  const frame = document.getElementById('pdfFrame');
  if (frame) frame.src = '';
  closeModal('pdfModal');
}

/**
 * Impression iframe
 */
function printIframeInModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;

  const iframe = modal.querySelector('iframe');
  if (!iframe) return;

  try {
    iframe.contentWindow.focus();
    iframe.contentWindow.print();
  } catch (e) {
    window.open(iframe.src, '_blank', 'noopener');
  }
}

/**
 * Fermeture au clic extérieur
 */
window.addEventListener('click', function (event) {
  const pdfModal = document.getElementById('pdfModal');
  const syntheseModal = document.getElementById('syntheseModal');

  if (event.target === pdfModal) closePDFModal();
  if (event.target === syntheseModal) closeModal('syntheseModal');
});

/**
 * Fermeture avec ESC
 */
document.addEventListener('keydown', function (e) {
  if (e.key !== 'Escape') return;

  // ferme les deux si ouverts
  closePDFModal();
  closeModal('syntheseModal');
});
