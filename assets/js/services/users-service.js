import axios from 'axios';

/**
 * @returns {Promise}
 */
export function fetchUserInfos() {
    return axios.get('http://localhost:8000/api/user/infos/1');
}