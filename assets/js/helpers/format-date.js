/**
 * Formats a date
 *
 * @param {datetime} date
 * @returns {string}
 */
 export function formatDate(date) {
    let formatDate = new Date(date).toLocaleDateString();
    return formatDate;
 }