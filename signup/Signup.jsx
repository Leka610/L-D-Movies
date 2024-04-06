import FormInput from "./components/FormInput";
import "./signup.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowRightLong } from "@fortawesome/free-solid-svg-icons";
import { faArrowLeftLong } from "@fortawesome/free-solid-svg-icons";

import { useState } from "react";

const Signup = () => {
  //objekti per values
  const [values, setValues] = useState({
    name: "",
    lastName: "",
    phone: "",
    email: "",
    birthday: "",
    password: "",
    confirmPassword: "",
    acceptConditions: false,
  });

  //vlerat per objekte
  const inputs = [
    {
      id: 1,
      name: "name",
      type: "text",
      placeholder: "Name",
      errorMessage: "Your name can't contain numbers or special characters!",
      label: "Name",
      pattern: "^[A-Za-z]{2,}$",
      required: true,
    },
    {
      id: 2,
      name: "lastName",
      type: "text",
      placeholder: "Last Name",
      errorMessage:
        "Your last name can't contain numbers or special characters!",
      label: "Last Name",
      pattern: "^[A-Za-z]{2,}$",
      required: true,
    },
    {
      id: 3,
      name: "phone",
      type: "text",
      placeholder: "Phone",
      errorMessage: "Phone number invalid",
      label: "Phone",
      pattern: "^[0-9]{9}$",
      required: true,
    },
    {
      id: 4,
      name: "email",
      type: "email",
      placeholder: "Email",
      errorMessage: "Please provide a valid email address",
      label: "Email",
      required: true,
    },
    {
      id: 5,
      name: "birthday",
      type: "date",
      placeholder: "Birthday",
      label: "Birthday",
    },
    {
      id: 6,
      name: "password",
      type: "password",
      placeholder: "Password",
      errorMessage:
        "Your password must be 8-20 characters, contain an uppercase letter and a number!",
      label: "Password",
      pattern: "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\\S+$).{8,20}$",
      required: true,
    },
    {
      id: 7,
      name: "confirmPassword",
      type: "password",
      placeholder: "Confirm Password",
      errorMessage: "Passwords don't match",
      label: "Confirm Password",
      pattern: values.password,
      required: true,
    },
  ];

  const handleCheckboxChange = (e) => {
    setValues({ ...values, acceptConditions: e.target.checked });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
  };

  const onChange = (e) => {
    setValues({ ...values, [e.target.name]: e.target.value });
  };

  console.log(values);

  return (
    <div className="signup">
      <div className="back">
        <FontAwesomeIcon
          icon={faArrowLeftLong}
          className="icon back-icon"
          style={{ fontSize: "30px" }}
        />
      </div>
      <form onSubmit={handleSubmit}>
        <div className="titulli">
          <h1>Let's start with creating your account</h1>
        </div>
        <div className="inputs">
          {inputs.map((input) => (
            <FormInput
              key={input.id}
              {...input}
              value={values[input.name]}
              onChange={onChange}
            />
          ))}
        </div>
        <div className="terms">
          <input
            type="checkbox"
            id="acceptConditions"
            name="acceptConditions"
            checked={values.acceptConditions}
            onChange={handleCheckboxChange}
          />
          <p className="">
            By Signing up, you agree to our <a href="">Terms & Conditions</a>{" "}
            and <a href="">Privacy Policy.</a>
          </p>
        </div>

        <button type="submit" className="submit-button">
          <span className="text">Continue</span>

          <FontAwesomeIcon icon={faArrowRightLong} className="icon" />
        </button>
      </form>
    </div>
  );
};

export default Signup;
