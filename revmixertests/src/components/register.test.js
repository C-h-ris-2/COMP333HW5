import { render, screen, fireEvent } from "@testing-library/react";
import { BrowserRouter } from "react-router-dom";
import "@testing-library/jest-dom";
import RegistrationForm from "./register";

test("clicking on the Contact link navigates to the Contact page", () => {
  render(
    <BrowserRouter>
      <RegistrationForm />
      const linkElement = screen.getByText(/User Registration/i);
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