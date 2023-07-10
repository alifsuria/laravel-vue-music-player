import type { AxiosResponse } from 'axios';

export const showErrorOverlay = err => {
    const ErrorOverlay = customElements.get('vite-error-overlay')
    if (!ErrorOverlay) { return }
    const overlay = new ErrorOverlay(err)
    document.body.appendChild(overlay)
}

export const showErrorOverlayEvent = () => {
    window.addEventListener('error', ({ error }) => showErrorOverlay(error));
    window.addEventListener('unhandledrejection', ({ reason }) => showErrorOverlay(reason))
}

export const setFormError = (response: AxiosResponse): { [key: string]: string } => {
    const { errors } = response.data;
    const err: { [key: string]: string } = {};

    for (const key of Object.getOwnPropertyNames(errors)) {
        err[key] = errors[key][0] || "";
    }

    return err;
}