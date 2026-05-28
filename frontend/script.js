fetch("http://localhost/ifgabweekly/backend")
  .then(response => response.text())
  .then(data => {
    console.log(data);
  });