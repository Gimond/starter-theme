// import helloWorld from "./components/hello";

// helloWorld(); 

const world = 'world';

export function hello(who: string = world): string {
  return `Hello ${who}! `;
}
 