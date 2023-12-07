import { render, screen } from '@testing-library/react';
import App from './App';

test('renders learn react link', () => {
  render(<App />);
  const linkElement = screen.getByText(/learn react/i);
  expect(linkElement).toBeInTheDocument();
});
// import { render, fireEvent, screen } from "@testing-library/react";
// import Counter from "./App";
// import "@testing-library/jest-dom/extend-expect";

// // test block
// test("increments counter", () => {
//   // render the component on virtual dom
//   render(<Counter />);

//   // select the elements you want to interact with
//   const counter = screen.getByTestId("counter");
//   const incrementBtn = screen.getByTestId("increment");

//   // interact with those elements
//   fireEvent.click(incrementBtn);

//   // assert the expected result
//   expect(counter).toHaveTextContent("1");
// });

// import React from "react";
// // The React testing library simulates the DOM.
// import { render, screen } from "@testing-library/react";
// import InputField from "./App";
// // The jest-dom lets you analyze the rendered simulation.
// import "@testing-library/jest-dom";

// describe("InputField", () => {
//   // "it()" is the same as "test()", i.e., just an indentifier of a test.
//   // we can give it any description we like, e.g., here "renders the input field"
//   it("renders the input field", () => {
//     render(<InputField />);
//     const inputElement = screen.getByRole("textbox");
//     // The assertion listed here is a part of jest-dom, which is not imported by
//     // testing-library by default. We expect the form field to be rendered in
//     // the DOM.
//     expect(inputElement).toBeInTheDocument();
//   });
// });

// import { render, screen, fireEvent } from "@testing-library/react";
// import { BrowserRouter } from "react-router-dom";
// import "@testing-library/jest-dom";
// import Layout from "./Layout";

// test("clicking on the Contact link navigates to the Contact page", () => {
//   render(
//     <BrowserRouter>
//       <Layout />
//     </BrowserRouter>
//   );
//   const linkElement = screen.getByText(/Contact/i);
//   fireEvent.click(linkElement);
//   const contactElement = screen.getByText(/Contact/i);
//   expect(contactElement).toBeInTheDocument();
// });