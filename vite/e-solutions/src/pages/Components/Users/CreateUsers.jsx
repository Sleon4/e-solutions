import axios from "axios";
import { useState } from "react";
import { Button, Col, Form, Modal, Row } from "react-bootstrap";

function CreateUsers({ setReload }) {
  const [open, setOpen] = useState(false);

  const [full_name, setFull_name] = useState("");
  const [email, setEmail] = useState("");
  const [celular, setCelular] = useState("");
  const [name_folder, setName_folder] = useState("");

  const handleSubmit = (e) => {
    e.preventDefault();

    const form = {
      full_name: full_name,
      email: email,
      celular: parseInt(celular),
      name_folder: name_folder,
    };

    axios
      .post(import.meta.env.VITE_SERVER_URL_AUD + "/api/users", form)
      .then((res) => {
        // console.log(res.data);
        alert(res.data.message);

        if ("success" === res.data.status) {
          setOpen(false);
          setReload(true);
        }
      });
  };

  return (
    <>
      <Button type="buttton" onClick={() => setOpen(true)}>
        Add Users
      </Button>

      <Modal show={open} onHide={() => setOpen(false)}>
        <Modal.Header closeButton>
          <Modal.Title>Create Users</Modal.Title>
        </Modal.Header>

        <Form onSubmit={handleSubmit}>
          <Modal.Body>
            <Row>
              <Col xs={12} sm={6} md={6}>
                <Form.Group className="mb-3">
                  <Form.Control
                    type="test"
                    placeholder="Fullname..."
                    required
                    value={full_name}
                    onChange={(e) => setFull_name(e.target.value)}
                  />
                </Form.Group>
              </Col>

              <Col xs={12} sm={6} md={6}>
                <Form.Group className="mb-3">
                  <Form.Control
                    type="email"
                    placeholder="Email..."
                    required
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                  />
                </Form.Group>
              </Col>

              <Col xs={12} sm={6} md={6}>
                <Form.Group className="mb-3">
                  <Form.Control
                    type="phone"
                    placeholder="Celular..."
                    required
                    value={celular}
                    onChange={(e) => setCelular(e.target.value)}
                  />
                </Form.Group>
              </Col>

              <Col xs={12} sm={6} md={6}>
                <Form.Group className="mb-3">
                  <Form.Control
                    type="test"
                    placeholder="Name Folder..."
                    required
                    value={name_folder}
                    onChange={(e) => setName_folder(e.target.value)}
                  />
                </Form.Group>
              </Col>
            </Row>
          </Modal.Body>

          <Modal.Footer>
            <Button variant="secondary" onClick={() => setOpen(false)}>
              Close
            </Button>

            <Button type="submit">Save Changes</Button>
          </Modal.Footer>
        </Form>
      </Modal>
    </>
  );
}

export default CreateUsers;
