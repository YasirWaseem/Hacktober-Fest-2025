def divide(dividend: int, divisor: int) -> int:
    INT_MAX = 2**31 - 1
    INT_MIN = -2**31

    # Handle overflow edge case
    if dividend == INT_MIN and divisor == -1:
        return INT_MAX  # Clamped to 32-bit max

    # Determine sign of result
    negative = (dividend < 0) ^ (divisor < 0)

    # Work with absolute values
    dividend, divisor = abs(dividend), abs(divisor)

    quotient = 0

    # Efficient subtraction using bit shifting
    while dividend >= divisor:
        temp, multiple = divisor, 1
        while dividend >= (temp << 1):
            temp <<= 1
            multiple <<= 1
        dividend -= temp
        quotient += multiple

    return -quotient if negative else quotient

print(divide(10, 3))   # Output: 3
print(divide(7, -3))   # Output: -2
print(divide(-15, 2))  # Output: -7
print(divide(-1, 1))   # Output: -1
