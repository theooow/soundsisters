import axios from 'https://cdn.jsdelivr.net/npm/axios@1.6.8/+esm';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
