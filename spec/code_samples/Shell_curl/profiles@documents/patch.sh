curl --request PATCH \
  --url https://www.directfreight.com/api/profiles/documents \
  --header 'accept: application/json' \
  --header 'content-type: application/json' \
  --header 'end-user-token: SOME_STRING_VALUE' \
  --data '{"current_name":"<ADD STRING VALUE>","new_name":"<ADD STRING VALUE>"}'