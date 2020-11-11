
# PHP Regular Expressions

A regular expression (or regex) is a sequence of characters that form a search pattern.

## Syntax

- __delimiter__: usually a `/` but can be any character that is not alphanum, backslash or space
- __pattern__: the pattern is what is being searched for (goes between delimiters)
- __modifier__: modifiers are optional and change how a search is performed

## Resources

- [Regex101](https://regex101.com/)
- [PHP Regex](https://www.w3schools.com/php/php_regex.asp)

---

To search for __special__ characters; use (\) backslash to escape them.


### 1. Regex __functions in PHP__

- __preg_match()__ - find the first match of a pattern in a string
- __preg_match_all()__ - finds all matches of a pattern in a string
- __preg_replace()__ - returns a string where matches of a patterns are replaces with a substring
- __preg_split()__ - breaks a string into an array using matches of regex as separators
- __preg_grep()__ - returns an array consisting only of elements from the input array which matched the pattern
- __preg_filter()__ - basically the same as preg_replace() but returns null if nothing was replaced

### 2. Regex __modifiers__

- __i__: performs a case-insensitive search
- __m__: performs a multiline search
- __u__: enables correct matching of UTF-8 encoded patterns

### 3. Regex __expression patterns__

- __[abc]__: find one of the options between the brackets
- __[^abc]__: find any character NOT between the brackets
- __[0-9]__: find a character in the range

### 4. __Metacharacters__

| Metacharacter | Description |
| ------------- | ------------- |
| | | Find a match for any one of the patterns separated by | as in: cat|dog|fish  |
| ^ | Find a match as beginning of string - ^Hello |
| . | Find just one instance of the character  |
| $ | Find a match as end of string - Hello$  |
| \d | Find a digit |
| \s | Find a whitespace character |
| \b | Find a match at beginning or end of word: \bWORD or WORD\b |
| \uxxxx | Find the unicode character specified by hexadecimal number xxxx |


### 5. __Quantifiers__

| Quantifier | Description |
| ------------- | ------------- |
| n+ | Matches any string that contains at least one n |
| n* | Matches any string that contains zero or more n |
| n? | Matches any string that contains zero or one n |
| n{x} | Matches any string that contains a sequence of X n's |
| n{x,y} | Matches any string that contains a sequence of X to Y n's |
| n{x,} | Matches any string that contains a sequence of at least X n's |

### 6. __Grouping__

Parentheses can be used to apply quantifiers to entire patterns. For example `$pattern = "/ba(na){2}/";`looks for "banana" (two times 'na').
