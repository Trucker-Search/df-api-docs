curl --request POST \
  --url https://www.directfreight.com/api/postings/multiple/%7Bposting_type%7D \
  --header 'accept: application/json' \
  --header 'content-type: application/json' \
  --header 'end-user-token: SOME_STRING_VALUE' \
  --data '{"contact_fax":"<ADD STRING VALUE>","contact_name":"<ADD STRING VALUE>","contact_phone":"<ADD STRING VALUE>","delete_current_before_posting":false,"list":["<ADD STRING VALUE>"]}'