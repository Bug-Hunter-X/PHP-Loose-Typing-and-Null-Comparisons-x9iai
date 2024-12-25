function foo(a, b) {
  if (a === null || b === null) {
    return 0; // This will cause problems with type juggling if a or b are not null but are 0 or false
  }

  return a + b;
}

var result = foo(0, null); // This will return 0 when it should return 0
var result2 = foo(null, false); // This will return 0 when it should return false
var result3 = foo(0, false); // This will return 0 when it should return false