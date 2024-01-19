import React, { useState } from "react";

import { MDBBtn, MDBContainer, MDBCard, MDBCardBody } from "mdb-react-ui-kit";
import { useNavigate } from "react-router-dom";
import { UseApp } from "../context/AppContext";

function Login() {
  const { login } = UseApp();
  const navigate = useNavigate();
  const [error, setError] = useState("");

  const [formValue, setFormValue] = useState({
    email: "",
    password: "",
  });

  const onChange = (e) => {
    setFormValue({ ...formValue, [e.target.name]: e.target.value });
  };

  const handleLogin = async (event) => {
    event.preventDefault();
    try {
      const success = await login(formValue);

      if (success) {
        navigate("/home");
      } else {
        setError("Identifiants incorrects");
      }
    } catch (err) {
      setError(err.message);
    }
  };

  return (
    <MDBContainer fluid className="mt-5">
      <MDBCard alignment="center" className=" mb-8 mt-9 ">
        <MDBCardBody className="bg-black  mt-9 ">
          <form className="user-form" onSubmit={handleLogin}>
            <h1 className="bg-black pb-4 ">Connexion</h1>

            <div className="d-flex flex-column mb-4 bg-black">
              <h3 className="  text-black bg-white">Email</h3>
              <input
                value={formValue.email}
                onChange={onChange}
                label="Controlled value"
                id="controlledValue"
                name="email"
                type="email"
                required="required"
                className=" mt-4 "
                autoComplete="on"
              />
              <h3 className="mt-4 mb-2 text-black ">Mot de passe</h3>
              <input
                value={formValue.password}
                onChange={onChange}
                label="Controlled value"
                id="controlledValue"
                name="password"
                type="password"
                required="required"
                autoComplete="current-password"
                className="mb-4 mt-4"
              />

              {error && <p style={{ color: "red" }}>{error}</p>}
              <MDBBtn type="submit" className="mb-4 bg-white text-black" block>
                Se connecter
              </MDBBtn>
            </div>
          </form>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}

export default Login;
