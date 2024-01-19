import React, { useState } from "react";
import { MDBBtn, MDBContainer, MDBCard, MDBCardBody } from "mdb-react-ui-kit";
import { UseApp } from "../context/AppContext";

export default function Register() {
  const { register, logout } = UseApp();
  const [formValue, setFormValue] = useState({
    username: "",
    email: "",
    password: "",
    birthday: "",
  });

  const submitform = async (e) => {
    e.preventDefault();
    await register(formValue);
    logout();
  };

  const onChange = (e) => {
    setFormValue({ ...formValue, [e.target.name]: e.target.value });
  };

  return (
    <MDBContainer fluid className="mt-5">
      <MDBCard alignment="center" className="bg-white mb-8 mt-9 ">
        <MDBCardBody className="bg-white  mt-9 ">
          <form onSubmit={(event) => submitform(event)}>
            <h1 className="pt-4 pb-4 text-black">Créer un compte</h1>

            <MDBCardBody className="bg-black mt-9 ">
              <div className="d-flex flex-column mb-4 mt-4 bg-black">
                <h3 className="mt-4 mb-2 text-black bg-white">Pseudo</h3>
                <input
                  value={formValue.username}
                  onChange={onChange}
                  label="Controlled value"
                  id="controlledValue"
                  name="username"
                  type="text"
                  className="mb-4 mt-4 "
                />

                <h3 className="mt-4 mb-2 text-black ">Email</h3>
                <input
                  value={formValue.email}
                  onChange={onChange}
                  label="Controlled value"
                  id="controlledValue"
                  name="email"
                  type="email"
                  className="mb-4 mt-4"
                />
                <h3 className="mt-4 mb-2 text-black ">Mot de passe</h3>
                <input
                  value={formValue.password}
                  onChange={onChange}
                  label="Controlled value"
                  id="controlledValue"
                  name="password"
                  type="password"
                  className="mb-4 mt-4"
                />

                <h3 className="mt-4 mb-2 text-black ">Date de naissance</h3>
                <input
                  value={formValue.birthday}
                  onChange={onChange}
                  label="Controlled value"
                  id="controlledValue"
                  name="birthday"
                  type="text"
                  className="mb-4 mt-4"
                />
              </div>
            </MDBCardBody>

            <MDBBtn type="submit" className="mb-4 mt-4 bg-black" block>
              Suivant
            </MDBBtn>
          </form>
        </MDBCardBody>
      </MDBCard>
    </MDBContainer>
  );
}
