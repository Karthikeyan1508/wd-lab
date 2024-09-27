function isFirstCharUppercase(str) {
    if (str.length === 0) {
        return false; // Empty string case
    }
    const firstChar = str.charAt(0);
    return firstChar === firstChar.toUpperCase();
}

// Test cases
console.log(isFirstCharUppercase("Hello")); // true
console.log(isFirstCharUppercase("world")); // false
console.log(isFirstCharUppercase(""));      // false
