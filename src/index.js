import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import Navbar from "./scripts/navbar"
import Footer from "./scripts/footer"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")
void person1

if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

if (document.querySelector("#st-navbar-root")) {
  const root = ReactDOM.createRoot(document.querySelector("#st-navbar-root"))
  root.render(<Navbar />)
}

if (document.querySelector("#st-footer-root")) {
  const root = ReactDOM.createRoot(document.querySelector("#st-footer-root"))
  root.render(<Footer />)
}