function formatNumberWithCommas(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Test cases
console.log(formatNumberWithCommas(1000));       // "1,000"
console.log(formatNumberWithCommas(1000000));    // "1,000,000"
console.log(formatNumberWithCommas(987654321));  // "987,654,321"
