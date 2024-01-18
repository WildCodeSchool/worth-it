import React, { useState } from "react";

import {
  MDBInput,
  MDBCol,
  MDBRow,
  MDBCheckbox,
  MDBBtn,
} from "mdb-react-ui-kit";
import { Link, useNavigate } from "react-router-dom";
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
    <form className="user-form" onSubmit={handleLogin}>
      <h1>Connexion</h1>
      <MDBInput
        className="mb-4"
        value={formValue.email}
        name="email"
        onChange={onChange}
        id="validationUser01"
        required="required"
        label="Adresse mail"
        type="email"
        autoComplete="on"
      />
      <MDBInput
        className="mb-4"
        value={formValue.password}
        name="password"
        onChange={onChange}
        id="validationUser02"
        required="required"
        label="Mot de passe"
        type="password"
        autoComplete="current-password"
      />

      <MDBRow className="mb-4">
        <MDBCol className="d-flex justify-content-center">
          <MDBCheckbox
            id="form2Example3"
            label="Se souvenir de moi"
            defaultChecked
          />
        </MDBCol>
        <MDBCol>
          <Link className="nav-link navLink" to="/verificationlogin">
            Mot de passe oublié ?
          </Link>
        </MDBCol>
      </MDBRow>
      {error && <p style={{ color: "red" }}>{error}</p>}
      <MDBBtn type="submit" className="mb-4" block>
        Se connecter
      </MDBBtn>

      <div className="text-center">
        <p>
          Pas encore membre ?{" "}
          <Link className="nav-link navLink" to="/register">
            Enregistrez-vous
          </Link>
        </p>
      </div>
    </form>
  );
}

export default Login;
