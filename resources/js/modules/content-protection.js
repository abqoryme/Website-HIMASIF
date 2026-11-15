// Catatan: ini hanya "pagar" ringan (mudah dilewati) dan mengganggu aksesibilitas.
// Aman dihapus: cukup buang import + pemanggilannya di app.js.
export function initContentProtection() {
    const blockedCtrlKeys = ['u', 'i', 'j', 's'];
    const blockedCtrlShiftKeys = ['I', 'J', 'C'];

    document.addEventListener('keydown', (event) => {
        const blocked = event.key === 'F12'
            || (event.ctrlKey && blockedCtrlKeys.includes(event.key))
            || (event.ctrlKey && event.shiftKey && blockedCtrlShiftKeys.includes(event.key));

        if (blocked) {
            event.preventDefault();
        }
    });

    // Klik kanan & drag gambar.
    document.addEventListener('contextmenu', (event) => event.preventDefault());
    document.addEventListener('dragstart', (event) => event.preventDefault());
}
