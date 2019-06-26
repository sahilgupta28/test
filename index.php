<?php

http://sandbox.onlinephpfunctions.com/code/5997e3e933573be4376ae13ff2fa5deaaa548d32

http://sandbox.onlinephpfunctions.com/code/71920455d761ab1f186bf114cfc88d6411bbfa96

SELECT authors.author_name, sum(books.sold_copies) as total_sale
FROM authors
LEFT JOIN books
ON authors.book_name = books.book_name
groupBy(authors.author_name)
orderby(total_sale, desc)
limit 3

rename function expertapprovalemail with expertApprovalEmail
rename variable  userName with user_name  
Remove $user_type_id = $user_type_id;

replace $clienEmail = getenv('CLIENT_EMAIL'); $mailFrom = $clienEmail;
with $mailFrom = getenv('CLIENT_EMAIL');


use
if($response)
{
return true;
}

return false;



