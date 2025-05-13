import scanf from 'scanf';

const p = scanf("%d");
const d = scanf("%d");
const b = scanf("%d");

let pontos = p * 1 + d * 2 + b * 3;

if (pontos >= 150) {
  console.log("B");
} else if (pontos >= 120) {
  console.log("D");
} else if (pontos >= 100) {
  console.log("P");
} else {
  console.log("N");
}
