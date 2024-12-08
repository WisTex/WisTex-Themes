/**
 * neuhub-tab theme specific JavaScript
 */

window.addEventListener('load', () => {
    if (location.href.indexOf("pdledit_gui") != -1) {
        const updatePdlEditorNavZIndex = () => {
            let editorPart = document.querySelector('#pdledit_gui_modules');
            if (editorPart) {
                editorPart.parentElement.parentElement.style.zIndex = '999999';
                clearInterval(PdlEditorNavInterval);
            }
        };
        let PdlEditorNavInterval = setInterval(updatePdlEditorNavZIndex, 500);
    }
});