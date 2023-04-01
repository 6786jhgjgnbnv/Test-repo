jQuery(document).ready(function() {

	jQuery('#Like-me').on('click',function(){
      likedislike();
	});
});


function likedislike(){
	jQuery.ajax({
    method: 'GET',
    url: '/like-create',
    success: function(response){ 
    },
    error: function(jqXHR, textStatus, errorThrown) { }
  });
}

//Adding 4 the question solution here 

function union(x, y) {
  var obj = {};
  for (var i = x.length-1; i >= 0; -- i)
     obj[x[i]] = x[i];
  for (var i = y.length-1; i >= 0; -- i)
     obj[y[i]] = y[i];
  var res = []
  for (var k in obj) {
    if (obj.hasOwnProperty(k))  // <-- optional
      res.push(obj[k]);
  }
  return res;
}

console.log(union([1, 2, 3], [100, 2, 1, 10]));
