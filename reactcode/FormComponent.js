import React from "react";

function FormComponent(props) {
  return (
    <main>
      <h1>Sample form</h1>
      <form className="inputForm">
        <input
          className="text"
          onChange={props.handleChange}
          name="firstName"
          placeholder="First Name"
          value={props.firstName}
        />
        <br />
        <input
          className="text"
          onChange={props.handleChange}
          name="lastName"
          placeholder="Last Name"
          value={props.lastName}
        />
        <br />
        <input
          className="text"
          onChange={props.handleChange}
          name="age"
          placeholder="Age"
          value={props.age}
        />
        <br />
        <br />
        <label>
          <input
            className="radiobutton"
            type="radio"
            name="gender"
            value="male"
            checked={props.gender === "male"}
            onChange={props.handleChange}
          />
          Male
        </label>
        <label>
          <br />
          <input
            className="radiobutton"
            type="radio"
            name="gender"
            value="female"
            checked={props.gender === "female"}
            onChange={props.handleChange}
          />
          Female
        </label>
        <br />
        <input
          className="text"
          onChange={props.handleChange}
          name="email"
          placeholder="Email"
          value={props.email}
        />
        <br />
        <input
          className="text"
          onChange={props.handleChange}
          type="password"
          name="password"
          placeholder="Password"
          value={props.password}
        />
        <br />
        <label className="destination-header">Select your country</label>
        <br />
        <select
          className="destination-input"
          onChange={props.handleChange}
          name="country"
          value={props.country}
        >
          <option value="">-- Please Choose a country --</option>
          <option value="Thailand">Thailand</option>
          <option value="Japan">Japan</option>
          <option value="Brazil">Brazil</option>
        </select>
        
        </div>
        <button className="submit">Submit</button>
      </form>
      <hr />
      <div className="entered-info">
        <h2>Entered information:</h2>
        <p>
          Your name: {props.firstName} {props.lastName}
        </p>
        <p>Your age: {props.age}</p>
        <p>Your gender: {props.gender}</p>
        <p>Your destination: {props.destination}</p>
        <p>Your dietary restrictions: </p>
        <div className="restrictions">
          <span>**Nuts free : {props.nutsFree ? " Yes" : "No"}</span> <br />
          <span>**Lactose free : {props.lactoseFree ? " Yes" : "No"}</span>{" "}
          <br />
          <span>**Vegan meal : {props.isVegan ? " Yes" : "No"}</span>
        </div>
      </div>
    </main>
  );
}

export default FormComponent;