const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

// Test cases
console.log(emailPattern.test("example@example.com")); // true
console.log(emailPattern.test("user@domain.co.in"));   // true
console.log(emailPattern.test("invalid-email@domain")); // false
console.log(emailPattern.test("another.test@domain.com")); // true
