wget --quiet \
  --method DELETE \
  --header 'end-user-token: SOME_STRING_VALUE' \
  --output-document \
  - 'https://www.directfreight.com/api/boards/hidden_entries?entry_id=SOME_STRING_VALUE'