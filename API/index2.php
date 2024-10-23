<script>
    
fetch( 'http://api.isportsapi.com/sport/football/livescores?api_key=XJBWx9OO98m8Nsvp', {
    method: 'GET',
    headers: {
      'Authorization': 'XJBWx9OO98m8Nsvp',
      'Content-Type': 'application/json'
    }
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    // Process the retrieved data here
    console.log(data);
  })
  .catch(error => {
    console.error('There was a problem with your fetch operation:', error);
  });

</script>