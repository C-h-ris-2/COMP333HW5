import { render, screen, fireEvent } from "@testing-library/react";
import { BrowserRouter } from "react-router-dom";
import "@testing-library/jest-dom";
import Login from "./login";

test("clicking on the Contact link navigates to the Contact page", () => {
  render(
    <BrowserRouter>
      <Login />
      const linkElement = screen.getByText(/Welcome to RevMixer/i);
      fireEvent.click(linkElement);
      const contactElement = screen.getByText(/Welcome to RevMixer/i);
      expect(contactElement).toBeInTheDocument();
    </BrowserRouter>
  );
//   const linkElement = screen.getByText(/Contact/i);
//   fireEvent.click(linkElement);
//   const contactElement = screen.getByText(/Contact/i);
//   expect(contactElement).toBeInTheDocument();
});