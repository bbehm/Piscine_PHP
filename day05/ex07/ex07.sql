SELECT `title`, `summary` FROM `film` WHERE
`summary` LIKE '%s%' OR
`title` LIKE '%42%'
ORDER BY `duration`;